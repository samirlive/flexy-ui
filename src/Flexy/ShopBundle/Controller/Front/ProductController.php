<?php

namespace App\Flexy\ShopBundle\Controller\Front;

use App\Flexy\ProductBundle\Repository\ProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/shop')]
class ProductController extends AbstractController
{
    #[Route('/product/{id}', name: 'single_product')]
    public function singleProduct(ProductShop $product): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/products/singleProduct.html.twig', [
            'product' => $product,
        ]);
    }
}
