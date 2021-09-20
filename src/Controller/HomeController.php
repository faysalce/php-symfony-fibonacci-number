<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\FibonacciService;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{

    private $fibonacciNumber;

    private $fibonacciService;


    function __construct()
    {
        $this->fibonacciService = new FibonacciService();
    }

    public function index()
    {
        return $this->render('Home/index.html.twig');
    }

    public function getFibonacciNumber(int $number)
    {
        if (!is_numeric($number)) {
            return new JsonResponse(['status'=>'0','message'=>'Please put a number'],400);
        }
        $this->fibonacciNumber = $this->fibonacciService->getNumber($number);

        return new JsonResponse(['status'=>'1','fibonacciNumber'=>$this->fibonacciNumber]);
    }
}
