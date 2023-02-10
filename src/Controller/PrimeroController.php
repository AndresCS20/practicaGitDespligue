<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrimeroController extends AbstractController
{
    #[Route('/primero', name: 'app_primero')]
    public function index(): Response
    {
        return $this->render('primero/index.html.twig', [
            'controller_name' => 'PrimeroController',
            'spanita' => 'Españita',
        ]);
    }
}
