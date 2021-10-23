<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    
    public function index(): Response
    {   	

    	return $this->render('course/index.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
    }

    
    public function codeigniterCuatro()
    {		

    	return $this->render('course/codeigniter_cuatro.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
    }

    
    public function masterPhp()
    {
		
    	return $this->render('course/master_php.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
    }


    
    public function codeigniterTres()
	{
		return $this->render('course/codeigniter_tres.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
		
	}

	
	public function symfonyCinco()
	{		

		return $this->render('course/symfony_cinco.html.twig', [
    		'controller_name' => 'CourseController',
    	]);


	}

	
	public function laravelOcho()
	{

		return $this->render('course/postgresql_diez.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
		
	}

	
	public function gitGithub()
	{

		return $this->render('course/git_github.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
		
	}

    
    public function yiiDos()
    {       

        return $this->render('course/yii_dos.html.twig', [
            'controller_name' => 'CourseController',
        ]);


    }

    public function cakeCuatro()
    {       

        return $this->render('course/cakephp_cuatro.html.twig', [
            'controller_name' => 'CourseController',
        ]);


    }

     
    public function laraOcho()
    {       

        return $this->render('course/laravel_ocho.html.twig', [
            'controller_name' => 'CourseController',
        ]);


    }

	
}
