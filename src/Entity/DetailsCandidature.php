<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DetailsCandidatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
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
    private $secteur;

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
    private $revenu_mensuelle;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private array $nom = [];

    /**
     * @ORM\ManyToOne(targetEntity=Details6::class, inversedBy="detailsCandidatures")
     */
    private $qualite;

    /**
     * @ORM\ManyToOne(targetEntity=Details7::class, inversedBy="detailsCandidatures")
     */
    private $handicap;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_employeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activite_non_salarie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieu_activite_non_salarie;

    /**
     * @ORM\ManyToOne(targetEntity=Achat::class, inversedBy="detailsCandidatures")
     */
    private $mode_acquisition;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="detailsCandidatures")
     */
    private $agence;

    /**
     * @ORM\OneToMany(targetEntity=Agence::class, mappedBy="details")
     */
    private $agences;

    /**
     * 
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre nom et prénom ne peut pas contenir de chiffre"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_et_nom;

    public function __construct()
    {
        $this->agences = new ArrayCollection();
    }


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


    public function getQualite(): ?Details6
    {
        return $this->qualite;
    }

    public function setQualite(?Details6 $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

    public function getHandicap(): ?Details7
    {
        return $this->handicap;
    }

    public function setHandicap(?Details7 $handicap): self
    {
        $this->handicap = $handicap;

        return $this;
    }

    public function getNomEmployeur(): ?string
    {
        return $this->nom_employeur;
    }

    public function setNomEmployeur(?string $nom_employeur): self
    {
        $this->nom_employeur = $nom_employeur;

        return $this;
    }

    public function getActiviteNonSalarie(): ?string
    {
        return $this->activite_non_salarie;
    }

    public function setActiviteNonSalarie(?string $activite_non_salarie): self
    {
        $this->activite_non_salarie = $activite_non_salarie;

        return $this;
    }

    public function getLieuActiviteNonSalarie(): ?string
    {
        return $this->lieu_activite_non_salarie;
    }

    public function setLieuActiviteNonSalarie(string $lieu_activite_non_salarie): self
    {
        $this->lieu_activite_non_salarie = $lieu_activite_non_salarie;

        return $this;
    }

    public function getModeAcquisition(): ?Achat
    {
        return $this->mode_acquisition;
    }

    public function setModeAcquisition(?Achat $mode_acquisition): self
    {
        $this->mode_acquisition = $mode_acquisition;

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

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * @return Collection|Agence[]
     */
    public function getAgences(): Collection
    {
        return $this->agences;
    }

    public function addAgence(Agence $agence): self
    {
        if (!$this->agences->contains($agence)) {
            $this->agences[] = $agence;
            $agence->setDetails($this);
        }

        return $this;
    }

    public function removeAgence(Agence $agence): self
    {
        if ($this->agences->removeElement($agence)) {
            // set the owning side to null (unless already changed)
            if ($agence->getDetails() === $this) {
                $agence->setDetails(null);
            }
        }

        return $this;
    }

    public function getPrenomEtNom(): ?string
    {
        return $this->prenom_et_nom;
    }

    public function setPrenomEtNom(string $prenom_et_nom): self
    {
        $this->prenom_et_nom = $prenom_et_nom;

        return $this;
    }

    public function getExportData()
    {
        return \array_merge([
            'Reference_candidature' => $this->label,
            'Source' => $this->agence,
            'Prenom_&_Nom' => $this->client,
            'Type de logement' => $this->type_de_logement,
            'Mode acquisition' => $this->mode_acquisition,
            'Membre_cooperative' => $this->membre_cooperative,
            'Nom de la coopérative' => $this->nom_de_la_cooperative,
            'Beneficiaire_appui_ou_subvention' => $this->beneficiaire_appui_ou_subvention,
            'Logement_actuel' => $this->logement_actuel,
            'Qualité' => $this->qualite,
            'Handicap' => $this->handicap,
            'Situation' => $this->situation,
            'Nom Empoyeur' => $this->nom_employeur,
            'Domaine d\'activite' => $this->activite_non_salarie,
            'Lieu d\'activite' => $this->lieu_activite_non_salarie,
            'Type de Contrat' => $this->type_de_contrat,
            'Compta bancaire' => $this->compte_bancaire,
            'Nom de la banque' => $this->nom_de_la_banque,
            'Personne à charge' => $this->nombre_de_personne_en_charge,
            'Nom de la société' => $this->nom_de_la_societe,
            'Revenu Mensuel' => $this->revenu_mensuelle,
            'Salaire Mensuel' => $this->salaire_mensuelle,
        ], );

        $object = new Client();
        echo $object->getExportData();
        echo $object->getExportData;
    }
}