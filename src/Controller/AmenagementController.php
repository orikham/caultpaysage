<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AmenagementController extends AbstractController
{
    #[Route('/amenagement', name: 'app_amenagement')]
    public function index(): Response
    {
        return $this->render('amenagement/amenagement.html.twig', [
            'controller_name' => 'AmenagementController',
        ]);
    }
}
