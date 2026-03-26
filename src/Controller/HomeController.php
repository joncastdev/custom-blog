<?php

namespace App\Controller;

use App\Entity\Subscribe;
use App\Form\SubscribeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request): Response
    {  
        $subs = new Subscribe();
        $form = $this->createForm(SubscribeFormType::class, $subs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subs);
            $entityManager->flush();

            $this->addFlash(
                'sub_message',
                'Gracias por Suscribirse'
            );

            return $this->redirectToRoute('home');
        } 	

        return $this->render('home/index.html.twig', [
          'controller_name' => 'HomeController',
          'form' => $form->createView()
      ]);
    }

   
    public function tutorials()
    {       

        return $this->render('tutorials/index.html.twig');
    }


    
    public function codeigniterCuatro()
    {		

    	return $this->render('tutorials/codeigniter_cuatro.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }

    
    public function codeigniterTres()
    {

    	return $this->render('tutorials/codeigniter_tres.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }


   
    public function symfonyCinco()
    {
      return $this->render('tutorials/symfony_cinco.html.twig', [
          'controller_name' => 'HomeController',
      ]);

  }

	
	public function postgreSqlTrece()
	{		

		return $this->render('tutorials/postgresql_trece.html.twig', [
          'controller_name' => 'HomeController',
      ]);


	}

	
	public function laravelOcho()
	{

		return $this->render('tutorials/laravel_ocho.html.twig', [
          'controller_name' => 'HomeController',
      ]);
		
	}

	
	public function gitGithub()
	{

		return $this->render('tutorials/git_github.html.twig', [
          'controller_name' => 'HomeController',
      ]);
		
	}
    
    
}
