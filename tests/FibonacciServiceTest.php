<?php

use App\Service\FibonacciService;
use PHPUnit\Framework\TestCase;

class FibonacciServiceTest extends TestCase{
  
    //  /**
    //  * test with data from dataProvider
    //  * @dataProvider providerFibonacci
    //  */
    public function testGetNumber() {
        $fibonacciService = new FibonacciService();
        $this->assertEquals(1, $fibonacciService->getNumber(1));
    }
    // public function testExceptionsForNegativeNumbers() {
    //     $fibonacciService = new FibonacciService();
    //     $fibonacciService->getNumber(-1);
        
    // }
    // public function providerFibonacci()
    // {
    //     return [
    //         [1, 1],
    //         [5, 8],
    //         [10, 55],
    //         [100, 354224848179261915075],
    //         [-5, 5],
    //         [-6, 8]
    //     ];
    // }
}
