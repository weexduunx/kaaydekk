<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\Details7Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=Details7Repository::class)
 */
class Details7
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
     * @ORM\OneToMany(targetEntity=DetailsCandidature::class, mappedBy="handicap")
     */
    private $detailsCandidatures;

    public function __construct()
    {
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
            $detailsCandidature->setHandicap($this);
        }

        return $this;
    }

    public function removeDetailsCandidature(DetailsCandidature $detailsCandidature): self
    {
        if ($this->detailsCandidatures->removeElement($detailsCandidature)) {
            // set the owning side to null (unless already changed)
            if ($detailsCandidature->getHandicap() === $this) {
                $detailsCandidature->setHandicap(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->label;
    }
}
