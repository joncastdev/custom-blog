<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {   	

    	return $this->render('home/index.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }

    /**
     * @Route("/codeigniter-4-tutorial", name="codeigniter4")
     */
    public function codeigniterCuatro()
    {		

    	return $this->render('tutorials/codeigniter_cuatro.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }

    /**
     * @Route("/codeigniter-3-tutorial", name="codeigniter3")
     */
    public function codeigniterTres()
    {
		
    	return $this->render('tutorials/codeigniter_tres.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }


    /**
     * @Route("/symfony-5-tutorial", name="symfony5")
     */
    public function symfonyCinco()
	{
		return $this->render('tutorials/symfony_cinco.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
		
	}

	/**
     * @Route("/postgresql-13-tutorial", name="postgresql13")
     */
	public function postgreSqlTrece()
	{		

		return $this->render('tutorials/postgresql_trece.html.twig', [
    		'controller_name' => 'HomeController',
    	]);


	}

	/**
     * @Route("/laravel-8-tutorial", name="laravel8")
     */
	public function laravelOcho()
	{

		return $this->render('tutorials/laravel_ocho.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
		
	}

	/**
     * @Route("/github-tutorial", name="github")
     */
	public function gitGithub()
	{

		return $this->render('tutorials/git_github.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
		
	}

	 /**
     * @Route("/codeigniter-4-controllers", name="codeigniter4_controllers")
     */
    public function codeigniterCuatroControllers()
    {		

    	return $this->render('blog/codeigniter4_controllers.html.twig', [
    		'controller_name' => 'HomeController',
    	]);
    }
}
