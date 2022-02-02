<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutorialController extends AbstractController
{
    /**
     * @Route("/tutoriales", name="tutoriales")
     */   
    public function tutorials()
    {       

      return $this->render('tutorials/index.html.twig');
    }


    /**
     * @Route("/tutoriales/codeigniter-4-tutorial", name="ci4_tutorial_espa")
     */ 
    public function codeigniterCuatro()
    {		

    	return $this->render('tutorials/codeigniter_cuatro.html.twig');
    }

    
    /**
     * @Route("/tutoriales/codeigniter-3-tutorial", name="ci3_tutorial")
     */ 
    public function codeigniterTres()
    {

    	return $this->render('tutorials/codeigniter_tres.html.twig');
    }



    /**
     * @Route("/tutoriales/symfony-5-tutorial", name="sym5_tutorial")
     */ 
    public function symfonyCinco()
    {
      return $this->render('tutorials/symfony_cinco.html.twig');

    }



    /**
     * @Route("/tutoriales/postgresql-13-tutorial", name="postgres13_tutorial")
     */ 
    public function postgreSqlTrece()
    {		

      return $this->render('tutorials/postgresql_trece.html.twig');

    }


    /**
     * @Route("/tutoriales/laravel-8-tutorial", name="lara8_tutorial")
     */ 
    public function laravelOcho()
    {

      return $this->render('tutorials/laravel_ocho.html.twig');

    }



    /**
     * @Route("/tutoriales/github-tutorial", name="github_tutorial")
     */
    public function gitGithub()
    {

      return $this->render('tutorials/git_github.html.twig');

    }
    
    
  }
