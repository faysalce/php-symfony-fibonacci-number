<?php

use App\Service\FibonacciService;
use PHPUnit\Framework\TestCase;

class FibonacciServiceTest extends TestCase{
  
     /**
     * test with data from dataProvider
     * @dataProvider providerFibonacci
     */
    public function testGetNumber($n, $result) {
        $fibonacciService = new FibonacciService();
        $this->assertEquals($result, $fibonacciService->getNumber($n));
    }
   
    public function providerFibonacci()
    {
        return [
            [1, 1],
            [5, 5],
            [10, 55],
            [100, 3736710778780516352],
            [-5, -5],
            [-6, -6]
        ];
    }
}
