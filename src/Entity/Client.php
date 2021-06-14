<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(formats={"json"})
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=0)
     */
    private $numero_cin_ou_passeport;

    /**
     * @ORM\OneToMany(targetEntity=Achat::class, mappedBy="client")
     * @ORM\JoinColumn (onDelete="CASCADE")
     */
    private $achat;

    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $date_de_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_de_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situation_matrimoniale;

    /**
     * @ORM\OneToMany(targetEntity=DetailsCandidature::class, mappedBy="client")
     * @ORM\JoinColumn( onDelete="CASCADE")
     */
    private $detailsCandidatures;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="clients")
     * @ORM\JoinColumn(name="ville_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $ville;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="clients")
     */
    private $agence;

    public function __construct()
    {
        $this->achat = new ArrayCollection();
        $this->detailsCandidatures = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumeroCinOuPasseport(): ?string
    {
        return $this->numero_cin_ou_passeport;
    }

    public function setNumeroCinOuPasseport(string $numero_cin_ou_passeport): self
    {
        $this->numero_cin_ou_passeport = $numero_cin_ou_passeport;

        return $this;
    }

    /**
     * @return Collection|Achat[]
     */
    public function getAchat(): Collection
    {
        return $this->achat;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achat->contains($achat)) {
            $this->achat[] = $achat;
            $achat->setClient($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achat->removeElement($achat)) {
            // set the owning side to null (unless already changed)
            if ($achat->getClient() === $this) {
                $achat->setClient(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->lieu_de_naissance;
    }

    public function setLieuDeNaissance(string $lieu_de_naissance): self
    {
        $this->lieu_de_naissance = $lieu_de_naissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getSituationMatrimoniale(): ?string
    {
        return $this->situation_matrimoniale;
    }

    public function setSituationMatrimoniale(string $situation_matrimoniale): self
    {
        $this->situation_matrimoniale = $situation_matrimoniale;

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
            $detailsCandidature->setClient($this);
        }

        return $this;
    }

    public function removeDetailsCandidature(DetailsCandidature $detailsCandidature): self
    {
        if ($this->detailsCandidatures->removeElement($detailsCandidature)) {
            // set the owning side to null (unless already changed)
            if ($detailsCandidature->getClient() === $this) {
                $detailsCandidature->setClient(null);
            }
        }

        return $this;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

}
