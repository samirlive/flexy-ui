<?php

namespace App\Flexy\ShopBundle\Controller\Front;

use App\Flexy\ProductBundle\Repository\ProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/shop/checkout')]
class CheckoutController extends AbstractController
{
    #[Route('/', name: 'checkout')]
    public function cart(): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/checkout/checkout.html.twig');
    }
}
