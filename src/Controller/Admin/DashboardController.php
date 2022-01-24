<?php

namespace App\Controller\Admin;

use App\Entity\Notification;
use App\Entity\Product;
use App\Entity\Table;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            //->setTitle('<img  style="margin:16px 0 20px 14px" src="flexy/img/logo-flexy-600px-white.png" width="150px" />')
            ->setFaviconPath('flexy/img/favicon-flexy-white.png')
            ->setTranslationDomain('admin');
            ;
            

    }

    public function configureMenuItems(): iterable
    {
                
        
        //yield MenuItem::linkToDashboard('Tableau de bord', 'fas fa-tachometer-alt');
        yield MenuItem::section('Stock');
        
        yield MenuItem::linkToCrud('Produits', 'fas fa-users', Product::class);
        yield MenuItem::linkToCrud('Notifications', 'fas fa-bell', Notification::class);


        
        
        /* START : Les Extensions Flexy */ 

        $finder = new Finder();
        $filesystem = new Filesystem();
        $finder->directories()->in(__DIR__."/../../Flexy")->depth('== 0');

        foreach($finder as $directorie){
            
            $bundleExist = $filesystem->exists($directorie->getPathname()."/Flexy".$directorie->getFilename().".php");
            
               if(!$bundleExist){
                    continue;
               }
               

            $bundleName =$directorie->getFilename(); 
            
            $bundleDashboardController = 'App\Flexy\\'.$bundleName.'\Controller\DashboardController';

            $dashboard = new $bundleDashboardController();
            foreach($dashboard->configureMenuItems() as $menu){
                yield $menu;
            }
        }
        /* END : Les Extensions Flexy */

        yield MenuItem::section('Parametres');
        

        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        
    }
}
