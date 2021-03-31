<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::factory(5)->create();
        \App\Models\Ticket::factory(3)->create();
        \App\Models\TicketSale::factory(3)->create();
    }
}
