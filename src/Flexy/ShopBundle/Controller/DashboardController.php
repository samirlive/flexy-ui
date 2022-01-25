<?php

namespace App\Flexy\ShopBundle\Controller;

use App\Controller\Admin\ProductCrudController;
use App\Flexy\ProductBundle\Entity\CategoryProduct;
use App\Flexy\ShopBundle\Entity\ProductShop;
use App\Flexy\ShopBundle\Entity\Vendor;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{


    public function configureMenuItems(): iterable
    {
        
        yield MenuItem::section('Market Place');
        yield MenuItem::linkToCrud("Vendeurs","fas fa-list",Vendor::class);
        yield MenuItem::linkToCrud("Produits","fas fa-list",ProductShop::class)->setController(ProductShopCrudController::class);
        yield MenuItem::linkToCrud("Catégories","fas fa-list",CategoryProduct::class)->setController(CategoryProductShopCrudController::class);
        
        
        
        

        
    }
}
