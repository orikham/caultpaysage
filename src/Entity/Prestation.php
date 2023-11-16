<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationRepository::class)]
class Prestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'Presta', targetEntity: Articles::class)]
    private Collection $articles;

    #[ORM\OneToMany(mappedBy: 'prestation', targetEntity: Amenagement::class)]
    private Collection $ame;

    #[ORM\OneToMany(mappedBy: 'prestation', targetEntity: Paysagisme::class)]
    private Collection $pay;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->ame = new ArrayCollection();
        $this->pay = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Articles>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Articles $article): static
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setPresta($this);
        }

        return $this;
    }

    public function removeArticle(Articles $article): static
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getPresta() === $this) {
                $article->setPresta(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, amenagement>
     */
    public function getAme(): Collection
    {
        return $this->ame;
    }

    public function addAme(amenagement $ame): static
    {
        if (!$this->ame->contains($ame)) {
            $this->ame->add($ame);
            $ame->setPrestation($this);
        }

        return $this;
    }

    public function removeAme(amenagement $ame): static
    {
        if ($this->ame->removeElement($ame)) {
            // set the owning side to null (unless already changed)
            if ($ame->getPrestation() === $this) {
                $ame->setPrestation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Paysagisme>
     */
    public function getPay(): Collection
    {
        return $this->pay;
    }

    public function addPay(Paysagisme $pay): static
    {
        if (!$this->pay->contains($pay)) {
            $this->pay->add($pay);
            $pay->setPrestation($this);
        }

        return $this;
    }

    public function removePay(Paysagisme $pay): static
    {
        if ($this->pay->removeElement($pay)) {
            // set the owning side to null (unless already changed)
            if ($pay->getPrestation() === $this) {
                $pay->setPrestation(null);
            }
        }

        return $this;
    }
}
