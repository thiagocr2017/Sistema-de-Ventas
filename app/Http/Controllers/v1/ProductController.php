<?php

namespace App\Http\Controllers\v1;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    public function index()
    {
        //
        $products = Product::paginate(10);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        //
        $categories = Category::get();
        $providers = Provider::get();
        return view('product.create', compact('categories','providers'));
    }

    public function store(StoreRequest $request)
    {
        //
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('product.edit', compact('product','categories','providers'));

    }

    public function update(UpdateRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
