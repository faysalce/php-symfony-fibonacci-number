<?php

namespace App\Service;

use App\Service\Fibonacci;

class FibonacciService implements Fibonacci
{

	public function getNumber(int $n): int
	{
		if ($n <= 1) {
			return $n;
		}

		$n2 = 0;
		$n1 = 1;

		for ($i = 2; $i < $n; $i++) {
			$n2_ = $n2;

			$n2 = $n1;
			$n1 = ($n1 + $n2_);
		}

		$fibonacci = $n2 + $n1;

		return intval($fibonacci);
	}
	
}
