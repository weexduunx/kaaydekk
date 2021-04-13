<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TypeDeBienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(formats={"json"})
 * @ORM\Entity(repositoryClass=TypeDeBienRepository::class)
 */
class TypeDeBien
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity=Bien::class, mappedBy="typeDeBien")
     */
    private $bien;

    /**
     * @ORM\OneToMany(targetEntity=DetailsCandidature::class, mappedBy="type_de_logement")
     */
    private $detailsCandidatures;

    public function __construct()
    {
        $this->bien = new ArrayCollection();
        $this->detailsCandidatures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection|Bien[]
     */
    public function getBien(): Collection
    {
        return $this->bien;
    }

    public function addBien(Bien $bien): self
    {
        if (!$this->bien->contains($bien)) {
            $this->bien[] = $bien;
            $bien->setTypeDeBien($this);
        }

        return $this;
    }

    public function removeBien(Bien $bien): self
    {
        if ($this->bien->removeElement($bien)) {
            // set the owning side to null (unless already changed)
            if ($bien->getTypeDeBien() === $this) {
                $bien->setTypeDeBien(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->label;
    }

    /**
     * @return Collection|DetailsCandidature[]
     */
    public function getDetailsCandidatures(): Collection
    {
        return $this->detailsCandidatures;
    }

    public function addDetailsCandidature(DetailsCandidature $detailsCandidature): self
    {
        if (!$this->detailsCandidatures->contains($detailsCandidature)) {
            $this->detailsCandidatures[] = $detailsCandidature;
            $detailsCandidature->setTypeDeLogement($this);
        }

        return $this;
    }

    public function removeDetailsCandidature(DetailsCandidature $detailsCandidature): self
    {
        if ($this->detailsCandidatures->removeElement($detailsCandidature)) {
            // set the owning side to null (unless already changed)
            if ($detailsCandidature->getTypeDeLogement() === $this) {
                $detailsCandidature->setTypeDeLogement(null);
            }
        }

        return $this;
    }
}
