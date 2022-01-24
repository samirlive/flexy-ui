<?php

namespace App\Flexy\ShopBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Flexy\ProductBundle\Entity\Product as EntityProduct;
use App\Flexy\ShopBundle\Repository\ProductShopRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table ;

/**
 * @ORM\Entity(repositoryClass=ProductShopRepository::class)
 * @Table(name="shop_product")
 */
#[ApiResource]
class ProductShop extends EntityProduct
{


    /**
     * @ORM\ManyToOne(targetEntity=Vendor::class, inversedBy="products")
     */
    private $vendor;

    /**
     * @ORM\ManyToMany(targetEntity=CategoryProductShop::class, inversedBy="productShops")
     */
    private $categories;

    public function __construct()
    {
        parent::__construct();
        $this->categories = new ArrayCollection();
    }



    public function getVendor(): ?Vendor
    {
        return $this->vendor;
    }

    public function setVendor(?Vendor $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * @return Collection|CategoryProductShop[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(CategoryProductShop $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(CategoryProductShop $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }
}
