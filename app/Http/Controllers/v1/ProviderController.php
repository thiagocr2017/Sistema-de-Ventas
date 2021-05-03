<?php

namespace App\Http\Controllers\v1;

use App\Models\Provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;

class ProviderController extends Controller
{
    public function index()
    {
        //
        $providers = Provider::orderBy('id','desc')->paginate(10);
        return view('provider.index', compact('providers'));
    }

    public function create()
    {
        //
        return view('provider.create');
    }

    public function store(StoreRequest $request)
    {
        //
        Provider::create($request->all());
        return redirect()->route('providers.index');
    }

    public function show(Provider $provider)
    {
        $pages = 10;
        $data = $provider->products;
        // dd($data->toJson(JSON_PRETTY_PRINT));
        $data = $data->toJson(JSON_PRETTY_PRINT);
        
        return view('provider.show', compact('provider', 'pages', 'data'));
    }

    public function edit(Provider $provider)
    {
        return view('provider.edit', compact('provider'));

    }

    public function update(UpdateRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.index');
    }

    public function destroy(provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index');
    }
}
