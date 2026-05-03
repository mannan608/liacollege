<?php

namespace App\Http\Controllers;

use App\Models\SeoMeta;
use App\Services\PageSpeedService;
use App\Services\SeoAnalyzer;
use App\Services\SeoScoreService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class SeoMetaController extends Controller
{
   public function index(PageSpeedService $pageSpeed, SeoAnalyzer $analyzer, SeoScoreService $scoreService)
{
    $seoMetas = SeoMeta::get()->map(function ($seoMeta) use ($pageSpeed, $analyzer, $scoreService) {

        $url = $seoMeta->canonical_url ?: url($seoMeta->path);

    //   GOOGLE PAGE SPEED
        $seoMeta->google_scores = $pageSpeed->analyze($url);

    // SEO ANALYSIS
        $html = @file_get_contents($url);

        $analysis = $html
            ? $analyzer->analyze($html, $seoMeta->meta_keywords)
            : [];

        $seoMeta->seo_result = $analysis;

    //    SEO SCORE
        $seoMeta->seo_score = !empty($analysis)
            ? $scoreService->calculate($analysis)
            : 0;

        return $seoMeta;
    });

    return view('backend.seo-meta.index', compact('seoMetas'));
}

    // public function index(Request $request, SeoAnalyzer $analyzer, SeoScoreService $scoreService)
    // {
    //     $data = $request->validate([
    //         'content' => ['required'],
    //         'keyword' => ['nullable', 'string'],
    //     ]);

    //     $analysis = $analyzer->analyze($data['content'], $data['keyword']);
    //     $score = $scoreService->calculate($analysis);

   

    //     return view('backend.seo-meta.index', [
    //         'score' => $score,
    //         'analysis' => $analysis,
    //     ]);
    // }


    //  public function index()
    // {
    //     $seoMetas = SeoMeta::all();

    //     return view('backend.seo-meta.index', compact('seoMetas'));
    // }

    public function create()
    {
        $excludedPrefixes = [
            'admin',
            'login',
            'register',
            'password',
            'api',
            '_',
            'sitemap',
            'up',
            'clear',
            'logout',
            'route-list',
            'password.reset',
            'Storage.local',
        ];

        $excludedNames = [
            'password.reset',
            'Storage.local',
        ];

        $data = collect(Route::getRoutes())
            ->filter(function ($route) use ($excludedPrefixes, $excludedNames) {

                $uri = $route->uri();
                $name = $route->getName();

                // Only GET routes
                if (!in_array('GET', $route->methods())) {
                    return false;
                }

                // Skip routes without name
                if (empty($name)) {
                    return false;
                }

                // Skip auth protected routes
                if (in_array('auth', $route->middleware())) {
                    return false;
                }

                // Skip excluded route names
                if (in_array($name, $excludedNames)) {
                    return false;
                }

                // Skip excluded URI prefixes
                foreach ($excludedPrefixes as $prefix) {
                    if (str_starts_with($uri, $prefix)) {
                        return false;
                    }
                }

                return true;
            })
            ->map(function ($route) {
                return [
                    'uri'  => $route->uri() === '/' ? '/' : '/' . $route->uri(),
                    'name' => $route->getName(),
                ];
            })
            ->values();

        return view('backend.seo-meta.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|string|max:500|unique:seo_metas,path',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'og_image' => 'nullable|image|max:5120',
            'canonical_url' => 'nullable|url',
            'schema_markup' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            $ogImage = null;
            if ($request->hasFile('og_image')) {
                $fileName = 'seo-og-' . uniqid() . '.' . $request->file('og_image')->extension();
                $request->file('og_image')->move('uploads/seo', $fileName);
                $ogImage = $fileName;
            }

            SeoMeta::create([
                'path' => $request->path,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                'og_image' => $ogImage,
                'canonical_url' => $request->canonical_url,
                'schema_markup' => $request->schema_markup,
            ]);

            DB::commit();
            $this->clearSeoCache();

            return redirect()->route('seo-meta.index')->with('success', 'SEO Meta created successfully!');
        } catch (\Throwable $e) {
            DB::rollBack();
            \Log::error($e->getMessage());
            return back()->with('error', 'Failed to create SEO Meta.')->withInput();
        }
    }

    public function edit($id)
    {
        $seoMeta = SeoMeta::findOrFail($id);
        return view('backend.seo-meta.edit', compact('seoMeta'));
    }

    public function update(Request $request, $id)
    {
        $seoMeta = SeoMeta::findOrFail($id);

        $request->validate([
            'path' => 'required|string|max:500|unique:seo_metas,path,' . $id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'og_image' => 'nullable|image|max:5120',
            'canonical_url' => 'nullable|url',
            'schema_markup' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            $uploadPath = public_path('uploads/seo/');

            if ($request->hasFile('og_image')) {
                if ($seoMeta->og_image && file_exists($uploadPath . $seoMeta->og_image)) {
                    unlink($uploadPath . $seoMeta->og_image);
                }

                $fileName = 'seo-og-' . uniqid() . '.' . $request->file('og_image')->extension();
                $request->file('og_image')->move($uploadPath, $fileName);
                $seoMeta->og_image = $fileName;
            }

            $seoMeta->path = $request->path;
            $seoMeta->meta_title = $request->meta_title;
            $seoMeta->meta_description = $request->meta_description;
            $seoMeta->meta_keywords = $request->meta_keywords;
            $seoMeta->canonical_url = $request->canonical_url;
            $seoMeta->schema_markup = $request->schema_markup;
            $seoMeta->save();

            DB::commit();
            $this->clearSeoCache();

            return redirect()->route('seo-meta.index')->with('success', 'SEO Meta updated successfully!');
        } catch (\Throwable $e) {
            DB::rollBack();
            \Log::error($e->getMessage());
            return back()->with('error', 'Failed to update SEO Meta.')->withInput();
        }
    }

    public function destroy($id)
    {
        $seoMeta = SeoMeta::findOrFail($id);

        try {
            $uploadPath = public_path('uploads/seo/');
            if ($seoMeta->og_image && file_exists($uploadPath . $seoMeta->og_image)) {
                unlink($uploadPath . $seoMeta->og_image);
            }

            $seoMeta->delete();
            $this->clearSeoCache();

            return redirect()->route('seo-meta.index')->with('success', 'SEO Meta deleted successfully!');
        } catch (\Throwable $e) {
            \Log::error($e->getMessage());
            return back()->with('error', 'Failed to delete SEO Meta.');
        }
    }

    private function clearSeoCache(): void
    {
        try {
            Artisan::call('optimize:clear');
        } catch (\Throwable $e) {
            \Log::warning('Failed to clear SEO cache after SEO meta change.', [
                'error' => $e->getMessage(),
            ]);
        }
    }


    // public function route_seo(Request $request, PageSpeedService $pageSpeed)
    // {
    //     $data = $request->validate([
    //         'route_name' => ['required', 'string'],
    //         'params'     => ['nullable', 'array'],
    //     ]);

    //     // Convert route name → URL
    //     $url = route($data['route_name'], $data['params'] ?? []);

    //     // Call PageSpeed
    //     $scores = $pageSpeed->analyze($url);

    //     return response()->json([
    //         'route_name' => $data['route_name'],
    //         'url'        => $url,
    //         'scores'     => $scores,
    //     ]);
    // }
}
