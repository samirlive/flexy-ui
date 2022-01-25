<?php

namespace App\Flexy\ShopBundle\Controller\Front;

use App\Flexy\ProductBundle\Repository\ProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/shop/cart')]
class CartController extends AbstractController
{
    #[Route('/', name: 'cart')]
    public function cart(): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/cart/cart.html.twig');
    }


    #[Route('/wishlist', name: 'wishlist')]
    public function wishlist(): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/cart/wishlist.html.twig');
    }


    #[Route('/compare', name: 'compare')]
    public function compare(): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/cart/compare.html.twig');
    }

}
