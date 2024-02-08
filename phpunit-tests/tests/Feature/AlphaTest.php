<?php
# test/Feature/AlphaTest.php
namespace Tests\Feature;

use Tests\TestCase;

class AlphaTest extends TestCase
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
        $response = $this->get('/alpha');

        $response->assertStatus(200);
        $response->assertSee('Alpha');
        $response->assertDontSee('Beta');
    }
}
