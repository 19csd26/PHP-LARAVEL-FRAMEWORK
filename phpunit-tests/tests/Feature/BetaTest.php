<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BetaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testExample()
    {
        $response = $this->get('/beta');

        $response->assertStatus(200);

        $response->assertSee('Beta');
        $response->assertDontSee('Alpha');
    }
}
