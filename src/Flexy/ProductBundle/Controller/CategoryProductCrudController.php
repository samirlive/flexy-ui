<?php

namespace App\Flexy\ProductBundle\Controller;

use App\Flexy\ProductBundle\Entity\CategoryProduct;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategoryProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoryProduct::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name'),
            ImageField::new('image')->setUploadDir("public/uploads")->setBasePath("/uploads"),
            TextEditorField::new('description'),
        ];
    }
    
}
