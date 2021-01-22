<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Medication::class, inversedBy="recipes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicine;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $dose;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMedicine(): ?Medication
    {
        return $this->medicine;
    }

    public function setMedicine(?Medication $medicine): self
    {
        $this->medicine = $medicine;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDose(): ?string
    {
        return $this->dose;
    }

    public function setDose(string $dose): self
    {
        $this->dose = $dose;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
