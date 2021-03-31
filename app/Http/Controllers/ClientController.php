<?php

namespace App\Http\Controllers;

use App\Models\Client;

use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientResource;
use App\Http\Controllers\ApiController;

class ClientController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = ClientResource::collection(
            Client::all()
        );

        return $this->sendResponse($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $client = new ClientResource(
            Client::create($request->all())
        );

        return $this->sendResponse($client, 'Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $client = new ClientResource($client);

        return $this->sendResponse($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, Client $client)
    {
        $client = $client->update($request->all());

        return $this->sendResponse($client, 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return $this->sendResponse($client, 'Cliente eliminado correctamente');
    }
}
