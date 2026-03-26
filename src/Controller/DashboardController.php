<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin_dashboard")
     */
    public function index(): Response
    {
        // return $this->render('dashboard/index.html.twig', [
        //     'controller_name' => 'DashboardController',
        // ]);

        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

   
    public function userDashboard(): Response
    {
        // return $this->render('dashboard/index.html.twig', [
        //     'controller_name' => 'DashboardController',
        // ]);

        return $this->render('user/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
