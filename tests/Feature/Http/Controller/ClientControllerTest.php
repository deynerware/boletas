<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ClientControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_controller()
    {

        $response = $this->json('GET', '/v1/clients/1');
        $response
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', 1)
                     ->where('name', 'Juan Velez')
                     ->where('identification', '1234567')
                     ->where('email', 'juan@gmail.com')
                     ->where('address', 'cll 5ta')
        );
    }

    public function test_show_a_record()
    {
        Client::factory()->create([
            'name'              => 'Juan Velez',
            'identification'    => '1234567',
            'email'             => 'juan@gmail.com',
            'address'           => 'cll 5ta'
        ]);

        $response = $this->json('GET', '/v1/clients/1');
        $response
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', 1)
                     ->where('name', 'Juan Velez')
                     ->where('identification', '1234567')
                     ->where('email', 'juan@gmail.com')
                     ->where('address', 'cll 5ta')
        );
    }
}
