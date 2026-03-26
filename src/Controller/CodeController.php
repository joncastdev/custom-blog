<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CodeController extends AbstractController
{
    /**
     * @Route("/codes", name="codes")
     */
    public function index(): Response
    {        

        return $this->render('code/index.html.twig', [
            'controller_name' => 'CodeController',
        ]);
    }

   
}
