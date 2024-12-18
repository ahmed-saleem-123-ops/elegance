<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $edits = Category::all();
        return view('backend.category.index', compact('edits'));
    }

    public function create()
    {
        return view('backend.category.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('category')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $hamd = Category::findOrFail($id);
        return view('backend.category.form', compact('hamd'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Category::where('id', $id)->update(['title' => $request->title]);


        return redirect()->route('category')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $brand = Category::findOrFail($id);
        $brand->delete();

        return redirect()->route('category')->with('success', 'Category deleted successfully!');
    }
}
