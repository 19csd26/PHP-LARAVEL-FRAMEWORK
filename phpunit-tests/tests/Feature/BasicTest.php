<?php

namespace Tests\Feature;

use App\Box;  // the Box class is in the 'App' namespace
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    /**
     * Test function for Box class
     */


    // assertTrue() and assertFalse()
    public function testBoxContents()
    {
        $box = new Box(['toy']);
        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
    }

    //assertEquals() and assertNull()
    public function testTakeOneFromTheBox()
    {
        // Create a new box with a single item ('torch')
        $box = new Box(['torch']);

        // Assert that calling takeOne on the box returns the expected item ('torch')
        $this->assertEquals('torch', $box->takeOne());

        // Now, the box is expected to be empty, so calling takeOne again should return null
        $this->assertNull($box->takeOne());
    }


    // assertContains(), assertCount(), and assertEmpty()
    public function testStartsWithALetter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        // Empty array if passed even
        $this->assertEmpty($box->startsWith('s'));
    }
}
