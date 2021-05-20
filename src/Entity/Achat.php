<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AchatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(formats={"json"})
 * @ORM\Entity(repositoryClass=AchatRepository::class)
 */
class Achat
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
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="achat")
     * @ORM\JoinColumn(name="client_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity=Bien::class, mappedBy="mode_acquisition")
     */
    private $biens;

    /**
     * @ORM\OneToMany(targetEntity=DetailsCandidature::class, mappedBy="mode_acquisition")
     */
    private $detailsCandidatures;


    public function __construct()
    {
        $this->clients = new ArrayCollection();
        $this->biens = new ArrayCollection();
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

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function __toString()
    {
        return $this->label;
    }

    /**
     * @return Collection|Bien[]
     */
    public function getBiens(): Collection
    {
        return $this->biens;
    }

    public function addBien(Bien $bien): self
    {
        if (!$this->biens->contains($bien)) {
            $this->biens[] = $bien;
            $bien->setModeAcquisition($this);
        }

        return $this;
    }

    public function removeBien(Bien $bien): self
    {
        if ($this->biens->removeElement($bien)) {
            // set the owning side to null (unless already changed)
            if ($bien->getModeAcquisition() === $this) {
                $bien->setModeAcquisition(null);
            }
        }

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
            $detailsCandidature->setModeAcquisition($this);
        }

        return $this;
    }

    public function removeDetailsCandidature(DetailsCandidature $detailsCandidature): self
    {
        if ($this->detailsCandidatures->removeElement($detailsCandidature)) {
            // set the owning side to null (unless already changed)
            if ($detailsCandidature->getModeAcquisition() === $this) {
                $detailsCandidature->setModeAcquisition(null);
            }
        }

        return $this;
    }

}
