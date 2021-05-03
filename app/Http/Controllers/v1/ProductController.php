<?php

namespace App\Http\Controllers\v1;

use App\Models\Product;
use App\Models\Category;
use App\Models\Provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        //
        $products = Product::orderBy('id', 'desc')->paginate(10);
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
        if ($request->hasFile('image')) {
            // verifica si el producto tiene imagen
            $image = $request->file('image');
            // cria nome e destino para la imagen
            $newImageName = $request->code . '-' . time() . '.' . $request->image->extension();
            $destinationPath = public_path('images/products/');

            if ($request->file('image')->isValid()) {
                // verifica si la imagen es valida para guardar
                $img = Image::make($image->path());
                // resize la imagen para el tamaño patrón
                $img->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($destinationPath.$newImageName);
                // guarda el producto
                Product::create([
                    'code' => $request->code,
                    'name' => $request->name,
                    'description' => $request->description,
                    'stock' => $request->stock,
                    'image' => $newImageName,
                    'sell_price' => $request->sell_price,
                    'status' => $request->status,
                    'category_id' => $request->category_id,
                    'provider_id' => $request->provider_id
                ]);
                return redirect()->route('products.index');
            }

        } else{
            Product::create($request->all());
            return redirect()->route('products.index');
        }
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
        if ($request->hasFile('image')) {
            if (file_exists(public_path("images/products/".$product->image))) {
                // verifica si el producto tiene imagen e deleta imagen anterior
                unlink(public_path("images/products/".$product->image));
            }
            
            $image = $request->file('image');
            // cria nome e destino para la imagen
            $newImageName = $request->code . '-' . time() . '.' . $request->image->extension();
            $destinationPath = public_path('images/products/');
            // verifica si la imagen es valida para guardar
            $img = Image::make($image->path());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            // dd($img);
            $img->save($destinationPath.$newImageName, 60);
            // atualiza el producto
            $product->update([
                'code' => $request->code,
                'name' => $request->name,
                'description' => $request->description,
                'stock' => $request->stock,
                'image' => $newImageName,
                'sell_price' => $request->sell_price,
                'status' => $request->status,
                'category_id' => $request->category_id,
                'provider_id' => $request->provider_id
            ]);
            return redirect()->route('products.edit',$product->id);

        }else {
            $product->update($request->all());
            return redirect()->route('products.edit',$product->id);
        }
    }

    public function destroy(Product $product)
    {
        if (file_exists(public_path("images/products/".$product->image))) {
            // verifica si el producto tiene imagen e deleta imagen anterior
            unlink(public_path("images/products/".$product->image));
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}
