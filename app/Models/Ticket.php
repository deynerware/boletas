<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial', 'event', 'date', 'time', 'place'
    ];

    public function sale()
    {
        return $this->hasMany(TicketSale::class);
    }

    public static function available()
    {
        return self::select(
            'tickets.id',
            'tickets.serial',
            'tickets.event',
            'tickets.date',
            'tickets.time',
            'tickets.place'
            )
            ->leftjoin(
                'ticket_sales', 'tickets.id', '=', 'ticket_sales.ticket_id'
            )
            ->where('ticket_sales.ticket_id', null)
            ->get();
    }
}
