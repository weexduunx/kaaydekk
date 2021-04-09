<?php

namespace App\Entity;

use App\Repository\DetailsCandidatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetailsCandidatureRepository::class)
 */
class DetailsCandidature
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
    private $nom_de_la_cooperative;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $nombre_de_personne_en_charge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_de_la_banque;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $membre_cooperative;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compte_bancaire;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $beneficiaire_appui_ou_subvention;

    /**
     * @ORM\ManyToOne(targetEntity=Details2::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $logement_actuel;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Details3::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $situation;

    /**
     * @ORM\ManyToOne(targetEntity=Details4::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $secteur;

    /**
     * @ORM\ManyToOne(targetEntity=Details5::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type_de_contrat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_de_la_societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $revenu_mensuelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salaire_mensuelle;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDeBien::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type_de_logement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeLaCooperative(): ?string
    {
        return $this->nom_de_la_cooperative;
    }

    public function setNomDeLaCooperative(string $nom_de_la_cooperative): self
    {
        $this->nom_de_la_cooperative = $nom_de_la_cooperative;

        return $this;
    }

    public function getNombreDePersonneEnCharge(): ?string
    {
        return $this->nombre_de_personne_en_charge;
    }

    public function setNombreDePersonneEnCharge(string $nombre_de_personne_en_charge): self
    {
        $this->nombre_de_personne_en_charge = $nombre_de_personne_en_charge;

        return $this;
    }

    public function getNomDeLaBanque(): ?string
    {
        return $this->nom_de_la_banque;
    }

    public function setNomDeLaBanque(string $nom_de_la_banque): self
    {
        $this->nom_de_la_banque = $nom_de_la_banque;

        return $this;
    }

    public function getMembreCooperative(): ?Details1
    {
        return $this->membre_cooperative;
    }

    public function setMembreCooperative(?Details1 $membre_cooperative): self
    {
        $this->membre_cooperative = $membre_cooperative;

        return $this;
    }

    public function getCompteBancaire(): ?Details1
    {
        return $this->compte_bancaire;
    }

    public function setCompteBancaire(?Details1 $compte_bancaire): self
    {
        $this->compte_bancaire = $compte_bancaire;

        return $this;
    }

    public function getBeneficiaireAppuiOuSubvention(): ?Details1
    {
        return $this->beneficiaire_appui_ou_subvention;
    }

    public function setBeneficiaireAppuiOuSubvention(?Details1 $beneficiaire_appui_ou_subvention): self
    {
        $this->beneficiaire_appui_ou_subvention = $beneficiaire_appui_ou_subvention;

        return $this;
    }

    public function getLogementActuel(): ?Details2
    {
        return $this->logement_actuel;
    }

    public function setLogementActuel(?Details2 $logement_actuel): self
    {
        $this->logement_actuel = $logement_actuel;

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

    public function getSituation(): ?Details3
    {
        return $this->situation;
    }

    public function setSituation(?Details3 $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getSecteur(): ?Details4
    {
        return $this->secteur;
    }

    public function setSecteur(?Details4 $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getTypeDeContrat(): ?Details5
    {
        return $this->type_de_contrat;
    }

    public function setTypeDeContrat(?Details5 $type_de_contrat): self
    {
        $this->type_de_contrat = $type_de_contrat;

        return $this;
    }

    public function getNomDeLaSociete(): ?string
    {
        return $this->nom_de_la_societe;
    }

    public function setNomDeLaSociete(string $nom_de_la_societe): self
    {
        $this->nom_de_la_societe = $nom_de_la_societe;

        return $this;
    }

    public function getRevenuMensuelle(): ?string
    {
        return $this->revenu_mensuelle;
    }

    public function setRevenuMensuelle(string $revenu_mensuelle): self
    {
        $this->revenu_mensuelle = $revenu_mensuelle;

        return $this;
    }

    public function getSalaireMensuelle(): ?string
    {
        return $this->salaire_mensuelle;
    }

    public function setSalaireMensuelle(string $salaire_mensuelle): self
    {
        $this->salaire_mensuelle = $salaire_mensuelle;

        return $this;
    }

    public function getTypeDeLogement(): ?TypeDeBien
    {
        return $this->type_de_logement;
    }

    public function setTypeDeLogement(?TypeDeBien $type_de_logement): self
    {
        $this->type_de_logement = $type_de_logement;

        return $this;
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
}
