<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class PaysagismeController extends AbstractController
{
    #[Route('/paysagisme', name: 'app_paysagisme')]
    public function index(): Response
    {
        return $this->render('paysagisme/paysagisme.html.twig', [
            'controller_name' => 'PaysagismeController',
        ]);
    }
}
