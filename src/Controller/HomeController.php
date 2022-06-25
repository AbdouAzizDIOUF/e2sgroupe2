<?php

namespace App\Controller;

use App\Entity\Rdv;
use App\Repository\RdvRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(RdvRepository $rdvRepository, ManagerRegistry $doctrine): Response
    {

        $entityManager = $doctrine->getManager();

        $rdv = new Rdv();
        $rdv->setDateRDVAt(new DateTimeImmutable("2022-07-05 10:30:00"));
        $rdv->setObject("Demande de renseignement");
        $rdv->setService("TOP PROS");
        $rdv->setMail("diouf@kdfnd.com");
        $rdv->setIsEntreprise(false);
        $rdv->setNom("Abdou Aziz DIOUF");
        $rdv->setTelephone("01234455683");

        $entityManager->persist($rdv);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
