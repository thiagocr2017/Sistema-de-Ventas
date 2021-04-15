<?php

namespace App\Http\Controllers\v1;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        //
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        //
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));

    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
