<?php 
// src/Acme/TestBundle/AcmeTestBundle.php
namespace App\Flexy\ProductBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use App\Flexy\ProductBundle\DependencyInjection\FlexyProductBundleExtension;

class FlexyProductBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new FlexyProductBundleExtension([],$container);

    }
}