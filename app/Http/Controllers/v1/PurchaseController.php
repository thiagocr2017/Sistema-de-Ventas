<?php

namespace App\Http\Controllers\v1;

use App\Models\Purchase;
use App\Models\Provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;

class PurchaseController extends Controller
{
    public function index()
    {
        //
        $purchases = Purchase::orderBy('id', 'desc')->paginate(10);
        return view('purchase.index', compact('purchases'));
    }

    public function create()
    {
        //
        $providers = Provider::get();
        return view('purchase.create', compact('providers'));
    }

    public function store(Request $request)
    {
        //
        $purchase = Purchase::create($request->all());
        
        foreach($request->product_id as $key => $product){
            $results[] = array(
                "product_id" => $request->product_id[$key],
                "quantity"   => $request->quantity_id[$key],
                "price"      => $request->price[$key],
            );
        }

        $purchase->purchaseDetails()->createMany($results);

        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        //
        return view('purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        //
        $providers = Provider::get();
        return view('purchase.edit', compact('purchase','providers'));
    }

    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    public function destroy(Purchase $purchase)
    {
        //
    }
}
