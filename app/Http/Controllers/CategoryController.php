<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
     public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status ?? 1
        ]);

        return redirect()->route('backend.categories.index')->with('success','Category created successfully'); 
    }

    public function edit(Category $category)
    {
        return view('admin.categories.create', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status ?? 1
        ]);

        return redirect()->route('backend.categories.index')->with('success','Category updated successfully');
    }

    public function destroy(Category $category)
    {
       // prevent deleting if courses exist
    if ($category->courses()->count() > 0) {
        return back()->with('error','Category has courses');
    }

    $category->delete();
        return back()->with('success','Category deleted successfully');
    }
}
