<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/systeme-solaire')]
class PlanetsController extends AbstractController
{
     #[Route('/', name: 'app_planets')]
    public function index(): Response
    {
        return $this->render('planets/index.html.twig');
    }

    #[Route('/soleil', name: 'app_sun')]
    public function sun(): Response
    {
        return $this->render('planets/sun.html.twig');
    }
} 