<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\FibonacciService;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    /**
     * Decleared Property for  $fibonacciNumber
     */
    private $fibonacciNumber;
    /**
     * Decleared Property for  $fibonacciService fr re use it
     */
    private $fibonacciService;


    function __construct()
    {
        //FibonacciService service assign to $fibonacciService property 
        $this->fibonacciService = new FibonacciService();
    }

    /**
     * Home Page index method for / route 
     *
     * @return render method for twig template home page 
     */

    public function index()
    {
        return $this->render('Home/index.html.twig');
    }
    /**
     * REST API method for getFibonacciNumber
     *
     * @param int $number
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */

    public function getFibonacciNumber(int $number)
    {
        // $number numaric check 
        if (!is_numeric($number)) {
            return new JsonResponse(['status' => false, 'message' => 'Please put a number'], 400);
        }
        $this->fibonacciNumber = $this->fibonacciService->getNumber($number);

        return new JsonResponse(['status' => true, 'fibonacciNumber' => $this->fibonacciNumber]);
    }
}
