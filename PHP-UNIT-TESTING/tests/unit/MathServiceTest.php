<?php
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase {
    public function testAdd() {
        // Create a mock for the MathService class
        $mathServiceMock = $this->getMockBuilder(MathService::class)
                                ->getMock();

        // Set up the expected behavior for the add method
        $mathServiceMock->expects($this->once())
                        ->method('add')
                        ->with(2, 3)
                        ->willReturn(5);

        // Create an instance of Calculator with the mock MathService
        $calculator = new Calculator($mathServiceMock);
        // Call the add method on Calculator, which should use the mock MathService
        $result = $calculator->add(2, 3);

        // Assert that the result is as expected
        $this->assertEquals(5, $result);
    }
}
class Calculator
{
    private $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    public function add($a, $b)
    {
        return $this->mathService->add($a, $b);
    }

    
    public function addd($a, $b)
    {
        return $this->mathService->add($a, $b);
    }

}

class MathService
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

