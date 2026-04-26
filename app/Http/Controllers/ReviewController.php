<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $query = Review::query()->orderByDesc('id');

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

        $reviews = $query->get();
        $users   = User::select('id', 'name')->get();

        return view('backend.review.index', compact('reviews', 'users'));
    }

    public function create()
    {
        return view('backend.review.create', [
            'review' => null
        ]);
    }

    public function store(Request $request)
    {   
        // return $request->all();
        $request->validate([
            'name'       => 'required|max:255',
            'designation' => 'nullable|max:500',
            'avatar'        => 'nullable|file|max:5120',
        ]);

        try {
            DB::beginTransaction();

            $fileName = null;

            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');

                // Use getClientOriginalExtension() instead of ->extension()
                $file_extension = $file->getClientOriginalExtension();

                $fileName = sprintf(
                    'avatar-%s-%s.%s',
                    uniqid(),
                    now()->format('d_m_Y'),
                    $file_extension
                );

                // Ensure folder exists
                $uploadPath = public_path('uploads/reviews');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move file
                $file->move($uploadPath, $fileName);
            }

            Review::create([
                'name'       => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'rating' => $request->rating,
                'avatar'        => $fileName,
                'created_by'  => auth()->id(),
                'created_at'  => now(),
            ]);

            DB::commit();
            return redirect()->route('review.index')->with('success', 'review created successfully!');
        } catch (\Throwable $e) {
            // return $e->getMessage();
            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('backend.review.create', compact('review'));
    }
    
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('backend.review.show', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required|max:255',
            'designation' => 'nullable|max:500',
            'avatar'        => 'nullable|file|max:5120',
        ]);

        try {
            DB::beginTransaction();

            $review  = Review::findOrFail($id);
            $oldFile = $review->avatar;
            $fileName = $oldFile;

            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');

                // Use getClientOriginalExtension() instead of ->extension()
                $file_extension = $file->getClientOriginalExtension();

                $fileName = sprintf(
                    'collection-%s-%s.%s',
                    uniqid(),
                    now()->format('d_m_Y'),
                    $file_extension
                );

                // Ensure folder exists
                $uploadPath = public_path('uploads/reviews');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move file
                $file->move($uploadPath, $fileName);
            }

            $review->update([
                'name'       => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'rating' => $request->rating,
                'avatar'        => $fileName,
                'updated_by'  => auth()->id(),
                'updated_at'  => now(),
            ]);

            DB::commit();
            return redirect()->route('review.index')->with('success', 'review updated successfully!');
        } catch (\Throwable $e) {

            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $review = Review::findOrFail($id);

            if ($review->file && file_exists(public_path('uploads/reviews/' . $review->file))) {
                unlink(public_path('uploads/reviews/' . $review->file));
            }

            $review->delete();

            return back()->with('success', 'review deleted!');


        } catch (\Throwable $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}