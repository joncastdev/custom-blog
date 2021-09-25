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

    /**
     * @Route("/tutorial/codeigniter-4-tutorial", name="codeigniter4")
     */
    public function codeigniterCuatro()
    {		

    	return $this->render('tutorials/codeigniter_cuatro.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }

    /**
     * @Route("/tutorial/codeigniter-3-tutorial", name="codeigniter3")
     */
    public function codeigniterTres()
    {
		
    	return $this->render('tutorials/codeigniter_tres.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }


    /**
     * @Route("/tutorial/symfony-5-tutorial", name="symfony5")
     */
    public function symfonyCinco()
	{
		return $this->render('tutorials/symfony_cinco.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
		
	}

	/**
     * @Route("/tutorial/postgresql-13-tutorial", name="postgresql13")
     */
	public function postgreSqlTrece()
	{		

		return $this->render('tutorials/postgresql_trece.html.twig', [
    		'controller_name' => 'HomeController',
    	]);


	}

	/**
     * @Route("/tutorial/laravel-8-tutorial", name="laravel8")
     */
	public function laravelOcho()
	{

		return $this->render('tutorials/laravel_ocho.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
		
	}

	/**
     * @Route("/tutorial/github-tutorial", name="github")
     */
	public function gitGithub()
	{

		return $this->render('tutorials/git_github.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
		
	}

	 /**
     * @Route("/blog/codeigniter-4-controllers", name="codeigniter4_controllers")
     */
    public function codeigniterCuatroControllers()
    {		

    	return $this->render('blog/codeigniter4_controllers.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }

     /**
     * @Route("/blog/codeigniter-3-configuraciones", name="codeigniter3_config")
     */
    public function codeigniterTresConfig()
    {
		
    	return $this->render('blog/codeigniter3_config.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }

     /**
     * @Route("/blog/yii-2-crud", name="yii2_crud")
     */
    public function yiiDosCrud()
    {
		
    	return $this->render('blog/yii2_crud.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }
}
