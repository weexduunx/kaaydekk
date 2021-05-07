<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DetailsCandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(formats={"json"})
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_de_la_cooperative;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $nombre_de_personne_en_charge;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_de_la_banque;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="membre_cooperative_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $membre_cooperative;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="compte_bancaire_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $compte_bancaire;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="beneficiaire_appui_ou_subvention_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $beneficiaire_appui_ou_subvention;

    /**
     * @ORM\ManyToOne(targetEntity=Details2::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="logement_actuel_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $logement_actuel;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="client_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Details3::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="situation_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $situation;

    /**
     * @ORM\ManyToOne(targetEntity=Details4::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="secteur_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private  $secteur;

    /**
     * @ORM\ManyToOne(targetEntity=Details5::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="type_de_contrat_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $type_de_contrat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_de_la_societe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private  $revenu_mensuelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salaire_mensuelle;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDeBien::class, inversedBy="detailsCandidatures")
     * @ORM\JoinColumn(name="type_de_logement_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $type_de_logement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private  $color;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private array $nom = [];

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


    public function getRevenuMensuelle(): ?int
    {
        return $this->revenu_mensuelle;
    }

    public function setRevenuMensuelle(int $revenu_mensuelle): self
    {
        $this->revenu_mensuelle = $revenu_mensuelle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalaireMensuelle()
    {
        return $this->salaire_mensuelle;
    }

    /**
     * @param mixed $salaire_mensuelle
     * @return DetailsCandidature
     */
    public function setSalaireMensuelle($salaire_mensuelle): DetailsCandidature
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return array
     */
    public function getNom(): array
    {
        return $this->nom;
    }

    /**
     * @param array $nom
     * @return DetailsCandidature
     */
    public function setNom(array $nom): DetailsCandidature
    {
        $this->nom = $nom;
        return $this;
    }

    public function __toString()
    {
        return $this->label;
    }
}