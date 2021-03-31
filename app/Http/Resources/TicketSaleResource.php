<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketSaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'cliente_id'        => $this->client_id,
            'ticket_id'         => $this->ticket_id,
            'way_to_pay'        => $this->way_to_pay,
            'quantity'          => $this->quantity,
        ];
    }
}
