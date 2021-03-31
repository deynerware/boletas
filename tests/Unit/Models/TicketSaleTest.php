<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Ticket;
use App\Models\TicketSale;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketSaleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function belong_to_ticket_instance()
    {
        $ticketSale = TicketSale::factory()->create();

        $this->assertInstanceOf(Ticket::class, $ticketSale->ticket);
    }
}
