<?php

namespace App\Flexy\ShopBundle\Controller\Vendor;

use App\Flexy\ShopBundle\Entity\CategoryProductShop;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoryProductShop::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
