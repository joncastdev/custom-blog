<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/cursos", name="cursos")
     */
    public function index(): Response
    {   	

    	return $this->render('course/index.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
    }

    /**
     * @Route("/cursos/codeigniter-4-de-0-al-limite", name="curso_codeigniter4")
     */
    public function codeigniterCuatro()
    {		

    	return $this->render('course/codeigniter_cuatro.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
    }

    /**
     * @Route("/cursos/master-en-frameworks-php", name="curso_master_php")
     */
    public function masterPhp()
    {
		
    	return $this->render('course/master_php.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
    }


    /**
     * @Route("/cursos/codeigniter-3-de-0-al-limite", name="curso_codeigniter3")
     */
    public function codeigniterTres()
	{
		return $this->render('course/codeigniter_tres.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
		
	}

	/**
     * @Route("/cursos/symfony-5-de-0-al-limite", name="curso_symfony5")
     */
	public function symfonyCinco()
	{		

		return $this->render('course/symfony_cinco.html.twig', [
    		'controller_name' => 'CourseController',
    	]);


	}

	/**
     * @Route("/cursos/postgresql-de-0-al-limite", name="curso_postgresql10")
     */
	public function laravelOcho()
	{

		return $this->render('course/postgresql_diez.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
		
	}

	/**
     * @Route("/cursos/git-de-0-al-limite", name="curso_git")
     */
	public function gitGithub()
	{

		return $this->render('course/git_github.html.twig', [
    		'controller_name' => 'CourseController',
    	]);
		
	}

    /**
     * @Route("/cursos/yii-2-de-0-al-limite", name="curso_yii2")
     */
    public function yiiDos()
    {       

        return $this->render('course/yii_dos.html.twig', [
            'controller_name' => 'CourseController',
        ]);


    }

     /**
     * @Route("/cursos/cakephp-4-de-0-al-limite", name="curso_cakephp")
     */
    public function cakeCuatro()
    {       

        return $this->render('course/cakephp_cuatro.html.twig', [
            'controller_name' => 'CourseController',
        ]);


    }

     /**
     * @Route("/cursos/laravel-8-de-0-al-limite", name="curso_laravel8")
     */
    public function laraOcho()
    {       

        return $this->render('course/laravel_ocho.html.twig', [
            'controller_name' => 'CourseController',
        ]);


    }

	
}
