<?php

namespace App\Controller;


use App\Entity\Rate;
use App\Repository\RateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

    /**
     * @return Response
     */
    public function index()
    {
        $rateRepository = $this->getDoctrine()->getRepository(Rate::class);
        $rates = $rateRepository->findToday();
        return $this->render('home.html.twig', [
            'rates' => $rates
        ]);
    }

}