<?php

namespace App\Http\Controllers\v1;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class ClientController extends Controller
{
    public function index()
    {
        //
        $clients = Client::paginate(10);
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        //
        return view('client.create');
    }

    public function store(StoreRequest $request)
    {
        //
        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        //
        return view('client.show', compact('client'));
    }

    public function edit(Client $client)
    {
        //
        return view('client.edit', compact('client'));
    }

    public function update(UpdateRequest $request, Client $client)
    {
        //
        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        //
        $client->delete();
        return redirect()->route('clients.index');
    }
}
