<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Ticket;
use App\Models\TicketSale;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketSaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TicketSale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ticket_id'     => Ticket::factory()->create(),
            'client_id'     => Client::factory()->create(),
            'quantity'      => $this->faker->randomDigit,
            'way_to_pay'    => $this->faker->word(1)
        ];
    }
}
