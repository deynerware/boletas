<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function have_a_ticket_sale_record()
    {
        $client = Client::factory()->create();

        $this->assertInstanceOf(Collection::class, $client->tickets);
    }
}
