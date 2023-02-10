<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Form\MakeformType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormularioController extends AbstractController
{
    #[Route('/formulario', name: 'app_formulario')]
    public function index(): Response
    {

        $usuario = new Usuario();
        $form = $this->createForm(TaskType::class, $usuario);


        return $this->render('formulario/index.html.twig', [
            'form' => $form,
        ]);
    }
}
