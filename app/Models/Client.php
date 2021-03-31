<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'identification', 'email', 'address'
    ];

    public function tickets()
    {
        return $this->hasMany(TicketSale::class);
    }
}
