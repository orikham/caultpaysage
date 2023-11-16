<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticlesRepository::class)]
class Articles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(length: 3000)]
    private ?string $content = null;

    #[ORM\ManyToOne(inversedBy: 'admino')]
    private ?Admin $admin_id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?PictureCover $PiCo = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Prestation $Presta = null;

    #[ORM\OneToMany(mappedBy: 'articles', targetEntity: PictureBefore::class)]
    private Collection $PiBe;

    #[ORM\OneToMany(mappedBy: 'articles', targetEntity: PictureAfter::class)]
    private Collection $PiAf;

    public function __construct()
    {
        $this->PiBe = new ArrayCollection();
        $this->PiAf = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getAdminId(): ?Admin
    {
        return $this->admin_id;
    }

    public function setAdminId(?Admin $admin_id): static
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    public function getPiCo(): ?PictureCover
    {
        return $this->PiCo;
    }

    public function setPiCo(?PictureCover $PiCo): static
    {
        $this->PiCo = $PiCo;

        return $this;
    }

    public function getPresta(): ?Prestation
    {
        return $this->Presta;
    }

    public function setPresta(?Prestation $Presta): static
    {
        $this->Presta = $Presta;

        return $this;
    }

    /**
     * @return Collection<int, PictureBefore>
     */
    public function getPiBe(): Collection
    {
        return $this->PiBe;
    }

    public function addPiBe(PictureBefore $piBe): static
    {
        if (!$this->PiBe->contains($piBe)) {
            $this->PiBe->add($piBe);
            $piBe->setArticles($this);
        }

        return $this;
    }

    public function removePiBe(PictureBefore $piBe): static
    {
        if ($this->PiBe->removeElement($piBe)) {
            // set the owning side to null (unless already changed)
            if ($piBe->getArticles() === $this) {
                $piBe->setArticles(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PictureAfter>
     */
    public function getPiAf(): Collection
    {
        return $this->PiAf;
    }

    public function addPiAf(PictureAfter $piAf): static
    {
        if (!$this->PiAf->contains($piAf)) {
            $this->PiAf->add($piAf);
            $piAf->setArticles($this);
        }

        return $this;
    }

    public function removePiAf(PictureAfter $piAf): static
    {
        if ($this->PiAf->removeElement($piAf)) {
            // set the owning side to null (unless already changed)
            if ($piAf->getArticles() === $this) {
                $piAf->setArticles(null);
            }
        }

        return $this;
    }
}
