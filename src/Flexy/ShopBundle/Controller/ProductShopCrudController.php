<?php

namespace App\Flexy\ShopBundle\Controller;

use App\Flexy\ShopBundle\Entity\ProductShop;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ProductShopCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductShop::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new("id")->hideOnForm(),
            TextField::new('name'),
            NumberField::new('price'),
            AssociationField::new('categoryProducts'),
            AssociationField::new('vendor'),
            TextEditorField::new('description'),
        ];
    }
    
}
