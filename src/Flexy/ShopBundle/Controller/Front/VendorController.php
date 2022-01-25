<?php

namespace App\Flexy\ShopBundle\Controller\Front;

use App\Flexy\ProductBundle\Repository\ProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/shop/vendors')]
class VendorController extends AbstractController
{
    #[Route('/single-vendor/{id}', name: 'single_vendor')]
    public function single(ProductShop $product): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/vendors/singleVendor.html.twig', [
            'product' => $product,
        ]);
    }
}
