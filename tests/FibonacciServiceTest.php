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
            [1000, 43466557686937456435688527675040625802564660517371780402481729089536555417949051890403879840079255169295922593080322634775209689623239873322471161642996440906533187938298969649928516003704476137795166849228875],
            [-5, -5],
            [-6, -6]
        ];
    }
}
