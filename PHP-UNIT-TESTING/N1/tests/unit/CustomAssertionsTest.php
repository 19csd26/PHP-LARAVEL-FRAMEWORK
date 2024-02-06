<?php

class CustomAssertionsTest extends PHPUnit\Framework\TestCase{

    public function testCustomAssertionExample(){
        $value = 42;
        $this->assertIsEven($value);
    }

    public function assertIsEven($val){
        $this->assertTrue($val % 2 === 0,'Expected an even Number.');
    }
}