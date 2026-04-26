<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query()->orderByDesc('id');

        // ===== Filters =====
        $query->when($request->id, fn($q) => $q->where('id', $request->id));
        $query->when($request->name, fn($q) => $q->where('name', 'LIKE', "%{$request->name}%"));
        $query->when($request->created_by, fn($q) => $q->where('created_by', $request->created_by));

        if ($request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $categories = $query->get();
        $categoryById = $categories->pluck('name','id')->toArray();
        return view('backend.category.index', compact('categories', 'categoryById'));
    }

    public function create()
    {   
        $categories = Category::all();
        $category = null;
        // return $category;
        return view('backend.category.create', compact('category','categories'));
    }

    public function store(Request $request)
    {   
        // return $request->all();
        $request->validate([
            'name'       => 'required|max:255',
            'description' => 'nullable',
            'banner'        => 'nullable|file|max:5120',
        ]);

        try {
            DB::beginTransaction();

            $fileName = null;

            if ($request->hasFile('banner')) {
                $file = $request->file('banner');

                // Use getClientOriginalExtension() instead of ->extension()
                $file_extension = $file->getClientOriginalExtension();

                $fileName = sprintf(
                    'banner-%s-%s.%s',
                    uniqid(),
                    now()->format('d_m_Y'),
                    $file_extension
                );

                // Ensure folder exists
                $uploadPath = public_path('uploads/categories');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move file
                $file->move($uploadPath, $fileName);
            }

            Category::create([
                'name'       => $request->name,
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'banner'        => $fileName,
                'created_by'  => auth()->id(),
                'created_at'  => now(),
            ]);

            DB::commit();
            return redirect()->route('category.index')->with('success', 'Category created successfully!');
        } catch (\Throwable $e) {
            // return $e->getMessage();
            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        // return $category;
        $categories = Category::all();
        return view('backend.category.create', compact('category','categories'));
    }
    
    public function show($id)
    {
        $category = Category::find($id);
        return view('backend.category.show', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required|max:255',
            'description' => 'nullable',
            'banner'        => 'nullable|file|max:5120',
        ]);

        try {
            DB::beginTransaction();

            $category  = Category::find($id);
            $oldFile = $category->banner;
            $fileName = $oldFile;

            if ($request->hasFile('banner')) {
                $file = $request->file('banner');

                // Use getClientOriginalExtension() instead of ->extension()
                $file_extension = $file->getClientOriginalExtension();

                $fileName = sprintf(
                    'collection-%s-%s.%s',
                    uniqid(),
                    now()->format('d_m_Y'),
                    $file_extension
                );

                // Ensure folder exists
                $uploadPath = public_path('uploads/categories');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move file
                $file->move($uploadPath, $fileName);
            }

            $category->update([
                'name'       => $request->name,
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'banner'        => $fileName,
                'updated_by'  => auth()->id(),
                'updated_at'  => now(),
            ]);

            DB::commit();
            return redirect()->route('category.index')->with('success', 'Category updated successfully!');
        } catch (\Throwable $e) {

            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $category = Category::find($id);

            if ($category->file && file_exists(public_path('uploads/categories/' . $category->file))) {
                unlink(public_path('uploads/categories/' . $category->file));
            }

            $category->delete();

            return back()->with('success', 'Category deleted!');


        } catch (\Throwable $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}