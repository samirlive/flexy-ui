<?php

namespace App\Flexy\FrontBundle\Controller;

use App\Flexy\ProductBundle\Repository\ProductRepository;
use App\Flexy\ShopBundle\Entity\ProductShop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/account')]
class MyAccountController extends AbstractController
{
    #[Route('/myaccount', name: 'myaccount')]
    public function index(): Response
    {
        return $this->render('@Flexy\FrontBundle/templates/myaccount/index.html.twig');
    }



    #[Route('/login-register', name: 'login_register')]
    public function login_register(): Response
    {
        return $this->render('@Flexy\FrontBundle/templates/myaccount/login-register.html.twig');
    }



}
