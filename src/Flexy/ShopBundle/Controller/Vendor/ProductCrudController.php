<?php

namespace App\Flexy\ShopBundle\Controller\Vendor;

use App\Flexy\ShopBundle\Entity\ProductShop;
use App\Flexy\ShopBundle\Entity\Vendor;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\FieldDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ProductCrudController extends AbstractCrudController
{



    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {

        $em = $this->getDoctrine()->getManager();

        

        parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);



        $vendor = $em->getRepository(Vendor::class)->findOneBy(["user"=>$this->getUser()]);
        $response = $this->get(EntityRepository::class)->createQueryBuilder($searchDto, $entityDto, $fields, $filters);
        $response->andWhere("entity.vendor = :vendor");
        $response->setParameter("vendor",$vendor);
        return $response;
    }


    public static function getEntityFqcn(): string
    {
        return ProductShop::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name'),
            ImageField::new('image')->setUploadDir("public/uploads")->setBasePath("/uploads"),
            "price",
            TextEditorField::new('description'),
            AssociationField::new("categories"),
        ];
    }
    
}
