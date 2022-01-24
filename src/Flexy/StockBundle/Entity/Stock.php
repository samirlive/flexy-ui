<?php

namespace App\Flexy\StockBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Flexy\ProductBundle\Entity\OrderItem;
use App\Flexy\StockBundle\Repository\StockRepository;
use App\Flexy\ProductBundle\Entity\Product;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StockRepository::class)
 */
#[ApiResource]
class Stock extends OrderItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     */
    private $product;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $movementType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $movementObjectif;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="stocks")
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="stocks")
     */
    private $document;


    public function __toString():string
    {
        return (string)$this->description;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }


    public function getMovementType(): ?string
    {
        return $this->movementType;
    }

    public function setMovementType(string $movementType): self
    {
        $this->movementType = $movementType;

        return $this;
    }

    public function getMovementObjectif(): ?string
    {
        return $this->movementObjectif;
    }

    public function setMovementObjectif(string $movementObjectif): self
    {
        $this->movementObjectif = $movementObjectif;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }
}
