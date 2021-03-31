<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'ticket_id', 'way_to_pay', 'quantity'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
