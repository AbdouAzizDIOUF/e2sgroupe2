<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TopHomeController extends AbstractController
{
    #[Route('/top_home', name: 'app_top_home')]
    public function index(): Response
    {
        return $this->render('top_home/index.html.twig', [
            'controller_name' => 'TopHomeController',
        ]);
    }
}
