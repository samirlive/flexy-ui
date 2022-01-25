<?php

namespace App\Flexy\FrontBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{


    public function configureMenuItems(): iterable
    {
        
        yield MenuItem::section('Frontend');
        yield MenuItem::linkToRoute('View the website',"fas fa-eye","front_home");
        
        
        
        

        
    }
}
