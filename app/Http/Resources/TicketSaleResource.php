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
            'id'        => $this->id,
            'serial'    => $this->serial,
            'event'     => $this->event,
            'date'      => $this->date,
            'time'      => $this->time,
            'place'     => $this->place,
        ];
    }
}
