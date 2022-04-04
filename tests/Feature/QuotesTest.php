<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class QuotesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_page_render()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_fetch_data_of_quotes()
    {
        $response = $this->get('/fetch-data');

        $response->assertStatus(200);
        $response->assertJsonCount(5);
    }
}
