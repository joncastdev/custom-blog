<?php

namespace App\Controller;

use App\Entity\Subscribe;
use App\Form\SubscribeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {        

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog/codeigniter-4-controllers", name="codeigniter4_controllers")
     */
     public function codeigniterCuatroControllers(Request $request)
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

        return $this->render('blog/codeigniter4_controllers.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
    }

     /**
     * @Route("/blog/codeigniter-3-configuraciones", name="codeigniter3_config")
     */
     public function codeigniterTresConfig(Request $request)
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

       return $this->render('blog/codeigniter3_config.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

     /**
     * @Route("/blog/yii-2-crud", name="yii2_crud")
     */
     public function yiiDosCrud(Request $request)
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

       return $this->render('blog/yii2_crud.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

   /**
     * @Route("/blog/fixtures-symfony", name="fixtures_symfony")
     */
     public function fixtuSym(Request $request)
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

       return $this->render('blog/fixtu_sym.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

   /**
     * @Route("/blog/symfony-doctrine", name="symfony_doctrine")
     */
     public function docSym(Request $request)
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

       return $this->render('blog/doc_sym.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

    /**
     * @Route("/blog/twig-symfony", name="twig_symfony")
     */
     public function twiSym(Request $request)
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

       return $this->render('blog/twi_sym.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

    /**
     * @Route("/blog/udemy-cursos", name="udemy_cursos")
     */
     public function udemyCursos(Request $request)
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

       return $this->render('blog/udemy_cursos.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

   /**
     * @Route("/blog/upwork-freelancer", name="upwork_freelancer")
     */
     public function upworkFreelancer(Request $request)
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

       return $this->render('blog/upwork_freelancer.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

    /**
     * @Route("/blog/symfony-vista-404", name="symfony_vista")
     */
     public function symTemp(Request $request)
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

       return $this->render('blog/sym_temp.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

   
}
