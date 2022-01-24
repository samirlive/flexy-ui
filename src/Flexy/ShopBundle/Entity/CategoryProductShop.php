<?php

namespace App\Flexy\ShopBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Flexy\ShopBundle\Repository\CategoryProductShopRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table ;
use App\Flexy\ProductBundle\Entity\CategoryProduct as EntityCategoryProduct;

/**
 * @ORM\Entity(repositoryClass=CategoryProductShopRepository::class)
 * @Table(name="shop_categoryproduct")
 */
#[ApiResource]
class CategoryProductShop extends EntityCategoryProduct
{


    /**
     * @ORM\ManyToOne(targetEntity=Vendor::class, inversedBy="categoryProducts")
     */
    private $vendor;


    public function getVendor(): ?Vendor
    {
        return $this->vendor;
    }

    public function setVendor(?Vendor $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }
}
