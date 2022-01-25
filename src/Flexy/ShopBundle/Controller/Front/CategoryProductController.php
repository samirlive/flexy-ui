<?php

namespace App\Flexy\ShopBundle\Controller\Front;

use App\Flexy\ProductBundle\Entity\CategoryProduct;
use App\Flexy\ProductBundle\Repository\CategoryProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/shop')]
class CategoryProductController extends AbstractController
{
    #[Route('/category-product/{id}', name: 'single_category_product')]
    public function singleProduct(CategoryProduct $categoryProduct): Response
    {
        return $this->render('@Flexy\ShopBundle/templates/categories/singleCategoryProduct.html.twig', [
            'categoryProduct' => $categoryProduct,
        ]);
    }
}
