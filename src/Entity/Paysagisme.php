<?php

namespace App\Entity;

use App\Repository\PaysagismeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaysagismeRepository::class)]
class Paysagisme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $taillehaie = null;

    #[ORM\Column(length: 255)]
    private ?string $taillefleur = null;

    #[ORM\Column(length: 255)]
    private ?string $taillemassif = null;

    #[ORM\Column(length: 255)]
    private ?string $tontepelouse = null;

    #[ORM\Column(length: 255)]
    private ?string $desherbage = null;

    #[ORM\Column(length: 255)]
    private ?string $arrosage = null;

    #[ORM\Column(length: 255)]
    private ?string $nettoyageterrasse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaillehaie(): ?string
    {
        return $this->taillehaie;
    }

    public function setTaillehaie(string $taillehaie): static
    {
        $this->taillehaie = $taillehaie;

        return $this;
    }

    public function getTaillefleur(): ?string
    {
        return $this->taillefleur;
    }

    public function setTaillefleur(string $taillefleur): static
    {
        $this->taillefleur = $taillefleur;

        return $this;
    }

    public function getTaillemassif(): ?string
    {
        return $this->taillemassif;
    }

    public function setTaillemassif(string $taillemassif): static
    {
        $this->taillemassif = $taillemassif;

        return $this;
    }

    public function getTontepelouse(): ?string
    {
        return $this->tontepelouse;
    }

    public function setTontepelouse(string $tontepelouse): static
    {
        $this->tontepelouse = $tontepelouse;

        return $this;
    }

    public function getDesherbage(): ?string
    {
        return $this->desherbage;
    }

    public function setDesherbage(string $desherbage): static
    {
        $this->desherbage = $desherbage;

        return $this;
    }

    public function getArrosage(): ?string
    {
        return $this->arrosage;
    }

    public function setArrosage(string $arrosage): static
    {
        $this->arrosage = $arrosage;

        return $this;
    }

    public function getNettoyageterrasse(): ?string
    {
        return $this->nettoyageterrasse;
    }

    public function setNettoyageterrasse(string $nettoyageterrasse): static
    {
        $this->nettoyageterrasse = $nettoyageterrasse;

        return $this;
    }
}
