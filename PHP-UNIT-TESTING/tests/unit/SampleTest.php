<?php

use PHPUnit\Framework\TestCase;

// class SampleTest extends TestCase {

    
//     // Your test methods go here
//     public function testAddition() {
//         $result = 2 + 2;
//         $this->assertEquals(4, $result);
//     }
    
// }

class SampleTest extends TestCase {
    public function testTrueAssertionToTrue() {
        $this->assertFalse(false);
    }
}
