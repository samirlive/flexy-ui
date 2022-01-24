<?php

namespace App\Flexy\ProductBundle\Controller;

use App\Flexy\ProductBundle\Entity\CategoryProduct;
use App\Flexy\ProductBundle\Entity\Order;
use App\Flexy\ProductBundle\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{


    public function configureMenuItems(): iterable
    {
        
        yield MenuItem::section('Gestion des produits');
        yield MenuItem::linkToCrud('Produits',"fas fa-tags",Product::class)->setController(ProductCrudController::class);
        yield MenuItem::linkToCrud('Categories',"fas fa-tags",CategoryProduct::class);
        yield MenuItem::linkToCrud('Commandes',"fas fa-tags",Order::class);
        
        
        
        

        
    }
}
