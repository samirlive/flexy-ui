<?php

namespace App\Flexy\ShopBundle\Controller\Front;

use App\Flexy\FrontBundle\Controller\MyAccountController as ControllerMyAccountController;
use App\Flexy\ProductBundle\Repository\ProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/shop/myaccount')]
class MyAccountController extends AbstractController
{
   
    #[Route('/', name: 'myaccount_shop')]
    public function index(): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/myaccount/index.html.twig');
    }


}
