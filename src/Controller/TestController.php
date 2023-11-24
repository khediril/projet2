<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        $etudiants = ['ali','salah','Yasmine'];
        $institut = "ESPRIT";
        return $this->render('test/index1.html.twig', [
            'etuds' => $etudiants,'inst' => $institut
        ]);
    }
    #[Route('/test2', name: 'app_test2')]
    public function index2(): Response
    {
        return $this->render('test/index2.html.twig', [
            'controller_name' => 'TestController2',
        ]);
    }
    #[Route('/somme/{nb1}/{nb2}', name: 'app_somme', requirements: ['nb1' => '\d+','nb2' => '\d+'])]
    public function somme($nb1,$nb2): Response
    {
        
        $somme = $nb1 + $nb2;
        return $this->render('test/somme.html.twig', [
            'somme' => $somme,'nb1' => $nb1,'nb2' => $nb2
        ]);
    }
}
