<?php

namespace App\Http\Controllers\v1;

use App\Models\Client;
use App\Models\Sale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        //
        $sales = Sale::get();
        return view('admin.sale.index', compact('sales'));
    }

    public function create()
    {
        //
        $clients = Client::get();
        return view('admin.sale.create', compact('clients'));
    }

    public function store(Request $request)
    {
        //
        $purchase = Sale::create($request->all());
        
        foreach($request->product_id as $key => $product){
            $results[] = array(
                "product_id" => $request->product_id[$key],
                "quantity"   => $request->quantity_id[$key],
                "price"      => $request->price[$key],
                "discount"   => $request->discount[$key],
            );
        }

        $purchase->saleDetails()->createMany($results);

        return redirect()->route('admin.sale.index');
    }

    public function show(Sale $sale)
    {
        //
        return view('admin.sale.show', compact('sales'));
    }

    public function edit(Sale $sale)
    {
        //
        $clients = Client::get();
        return view('admin.sale.edit', compact('sale','clients'));
    }

    public function update(Request $request, Sale $sale)
    {
        //
    }

    public function destroy(Sale $sale)
    {
        //
    }
}
