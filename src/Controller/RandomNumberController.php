<?php

namespace App\Controller;

use App\Document\Car;
use Doctrine\ODM\MongoDB\DocumentManager;
use MongoDB\BSON;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomNumberController extends AbstractController
{
    /**
     * @Route("/number")
     * @param DocumentManager $documentManager
     * @return Response
     * @throws Exception
     */
    public function number(DocumentManager $documentManager) {
        $car = new Car();
        $car->setName("A");
        $documentManager->persist($car);
        $documentManager->flush();


        $number = random_int(0, 100);
        return $this->render('random/number.html.twig', [
            'number' => $number
        ]);
    }
}