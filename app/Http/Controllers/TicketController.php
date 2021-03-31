<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketResource;
use App\Http\Controllers\ApiController;

class TicketController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = TicketResource::collection(
            Ticket::all()
        );

        return $this->sendResponse($ticket);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {
        $ticket = new TicketResource(
            Ticket::create($request->all())
        );

        return $this->sendResponse($ticket, 'Ticket creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $ticket = new TicketResource($ticket);

        return $this->sendResponse($ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TicketRequest $request, Ticket $ticket)
    {
        $ticket = $ticket->update($request->all());

        return $this->sendResponse($ticket, 'Ticket actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return $this->sendResponse($ticket, 'Ticket eliminado correctamente');
    }

    public function available()
    {
        $availables = TicketResource::collection(
            Ticket::available()
        );

        return $this->sendResponse($availables);
    }
}
