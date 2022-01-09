<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            //->setTitle('<img  style="margin:16px 0 20px 14px" src="flexy/img/logo-flexy-600px-white.png" width="150px" />')
            //->setFaviconPath('flexy/img/favicon-flexy-white.png')
            ;
            

    }

    public function configureMenuItems(): iterable
    {
        
        //yield MenuItem::linkToDashboard('Tableau de bord', 'fas fa-tachometer-alt');
        yield MenuItem::section('Stock');
        
        yield MenuItem::linkToUrl('Marchandises', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Devis', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Bons de commande', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Bons de livraison', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Factures', 'fas fa-users', "#");
        
        yield MenuItem::section('Autres');
        
        yield MenuItem::linkToUrl('Devis', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Bons de commande', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Bons de livraison', 'fas fa-users', "#");
        yield MenuItem::linkToUrl('Factures', 'fas fa-users', "#");
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        
        
        yield MenuItem::section('Autres');
        
        yield MenuItem::linkToUrl('Factures', 'fas fa-users', "#");
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        

        
    }
}
