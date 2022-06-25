<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TopProsController extends AbstractController
{
    #[Route('/top_pros', name: 'app_top_pros')]
    public function index(): Response
    {
        return $this->render('top_pros/index.html.twig', [
            'controller_name' => 'TopProsController',
        ]);
    }
}
