<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomNumberController extends AbstractController
{
    /**
     * @Route("/number")
     * @return Response
     * @throws Exception
     */
    public function number() {
        $number = random_int(0, 100);
        return $this->render('random/number.html.twig', [
            'number' => $number
        ]);
    }
}