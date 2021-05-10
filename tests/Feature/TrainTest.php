<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrainTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;

    /** @test */
    function guest_can_submit_a_new_train()
    {
        $response = $this->post('/submit', [
            'name' => "baticolo",
            'start_station' => "Petta",
            'end_station' => "Kandy",
            'seats' => '10',
            'departure_date_time' => "2020-05-11",
        ]);


        $response
            ->assertStatus(404);
    }
}
