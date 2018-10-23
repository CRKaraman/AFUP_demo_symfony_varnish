<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EsiController extends AbstractController
{
    public function example()
    {
        $number = random_int(0, 10);

        $response = $this->render('esi/example.html.twig', [
            'number' => $number,
        ]);

        $response->setSharedMaxAge(15);

        return $response;
    }

    public function displayName()
    {
        //get the name in session or in DB
        sleep(3);
        $response = new Response('Name: Nicolas L. - generated at: '.date('h:i:s'));
        $response->setSharedMaxAge(5);

        return $response;
    }
}