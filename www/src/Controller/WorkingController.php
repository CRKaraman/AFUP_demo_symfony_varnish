<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WorkingController extends AbstractController
{
    public function duration($max=10)
    {
        //working
        $number = random_int(3, $max);
        sleep($number);

        $response = new Response(
            '<html><body>Working during: '.$number.' seconds</body></html>'
        );
        $response->setSharedMaxAge(15);

        return $response;
    }
}