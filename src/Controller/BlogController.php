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
    
    public function index(): Response
    {        

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/codeigniter-4-controllers", name="codeigniter4_controllers")
     */
     public function codeigniterCuatroControllers()
     {        		

        return $this->render('blog/codeigniter4_controllers.html.twig');
    }

     /**
     * @Route("/codeigniter-3-config-class", name="codeigniter3_config")
     */
     public function codeigniterTresConfig()
     {        

       return $this->render('blog/codeigniter3_config.html.twig');
   }

     /**
     * @Route("/yii-2-crud", name="yii2_crud")
     */
     public function yiiDosCrud()
     {        

       return $this->render('blog/yii2_crud.html.twig');
   }

   /**
     * @Route("/fixtures-symfony", name="fixtures_symfony")
     */
     public function fixtuSym()
     {        

       return $this->render('blog/fixtu_sym.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

   /**
     * @Route("/symfony-doctrine", name="symfony_doctrine")
     */
     public function docSym()
     {        

       return $this->render('blog/doc_sym.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

    /**
     * @Route("/twig-symfony", name="twig_symfony")
     */
     public function twiSym()
     {        

       return $this->render('blog/twi_sym.html.twig', [
          'controller_name' => 'BlogController',
          'form' => $form->createView()
      ]);
   }

    /**
     * @Route("/error-pages-symfony5", name="symfony_view")
     */
     public function symTemp()
     {        

       return $this->render('blog/sym_temp.html.twig');
   }

    /**
     * @Route("/codeigniter4-restful-api", name="codeigniter4_rest_api")
     */
     public function codeigniterCuatroRest()
     {            

        return $this->render('blog/codeigniter4_rest.html.twig');
    }

    /**
     * @Route("/how-to-block-adblock", name="block_adblock")
     */
     public function bloquearAdBlock()
     {

        return $this->render('blog/ad_block.html.twig');
    }


    /**
     * @Route("/how-to-create-map-leaflet", name="map_leaflet")
     */
     public function leafletMap()
     {           

        return $this->render('blog/leaflet_map.html.twig');
    }


    /**
     * @Route("/codeigniter-4-tutorial", name="ci4_tutorial")
     */
     public function tutoCiCuatro()
     {            

        return $this->render('blog/codeigniter4_tutorial.html.twig');
    }


    /**
     * @Route("/factory-laravel-8", name="factory_laravel")
     */
     public function factoryLara()
     {           

        return $this->render('blog/factory_lara.html.twig');
    }

    /**
     * @Route("/stripe-payment-gateway-integration", name="stripe_api")
     */
     public function ci4Stripe()
     {           

        return $this->render('blog/ci4_stripe.html.twig');
    }
   
}
