<?php

namespace App\Entity;

use App\Repository\DrinkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DrinkRepository::class)]
class Drink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $teaOrCoffee = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $teaType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $coffeeType = null;

    #[ORM\Column(nullable: true)]
    private ?bool $sugar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeaOrCoffee(): ?string
    {
        return $this->teaOrCoffee;
    }

    public function setTeaOrCoffee(string $teaOrCoffee): static
    {
        $this->teaOrCoffee = $teaOrCoffee;

        return $this;
    }

    public function getTeaType(): ?string
    {
        return $this->teaType;
    }

    public function setTeaType(?string $teaType): static
    {
        $this->teaType = $teaType;

        return $this;
    }

    public function getCoffeeType(): ?string
    {
        return $this->coffeeType;
    }

    public function setCoffeeType(?string $coffeeType): static
    {
        $this->coffeeType = $coffeeType;

        return $this;
    }

    public function isSugar(): ?bool
    {
        return $this->sugar;
    }

    public function setSugar(?bool $sugar): static
    {
        $this->sugar = $sugar;

        return $this;
    }
}
