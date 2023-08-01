<?php

namespace App\Entity;

use App\Repository\ClubMmvRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubMmvRepository::class)]
class ClubMmv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $imgFile = null;

    #[ORM\Column(length: 255)]
    private ?string $hotleName = null;

    #[ORM\Column(length: 255)]
    private ?string $domainName = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(nullable: true)]
    private ?int $rate = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 2)]
    private ?string $price = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImgFile(): ?string
    {
        return $this->imgFile;
    }

    public function setImgFile(string $imgFile): static
    {
        $this->imgFile = $imgFile;

        return $this;
    }

    public function getHotleName(): ?string
    {
        return $this->hotleName;
    }

    public function setHotleName(string $hotleName): static
    {
        $this->hotleName = $hotleName;

        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(string $domainName): static
    {
        $this->domainName = $domainName;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(?int $rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
