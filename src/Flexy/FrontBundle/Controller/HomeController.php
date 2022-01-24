<?php

namespace App\Flexy\FrontBundle\Controller;

use App\Flexy\ProductBundle\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'flexy_front_bundle_controller_home')]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('@Flexy\FrontBundle/templates/home/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }
}
