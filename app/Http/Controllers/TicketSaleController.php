<?php

namespace App\Http\Controllers;

use App\Models\TicketSale;
use Illuminate\Http\Request;
use App\Http\Requests\TicketSaleRequest;
use App\Http\Resources\TicketSaleResource;

class TicketSaleController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketSale = TicketSaleResource::collection(
            TicketSale::all()
        );

        return $this->sendResponse($ticketSale);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketSaleRequest $request)
    {
        $ticketSale = new TicketSaleResource(
            TicketSale::create($request->all())
        );

        return $this->sendResponse($ticketSale, 'Boleta vendida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TicketSale $ticketSale)
    {
        $ticketSale = new TicketSaleResource($ticketSale);

        return $this->sendResponse($ticketSale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketSale $ticketSale)
    {
        $ticketSale = $ticketSale->update($request->all());

        return $this->sendResponse($ticketSale, 'Cambio efectuado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketSale $ticketSale)
    {
        $ticketSale->delete();

        return $this->sendResponse($ticketSale, 'Reversion de la transaccion correctamente');
    }
}
