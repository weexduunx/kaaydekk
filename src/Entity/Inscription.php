<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\InscriptionRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(formats={"json"})
 * @ORM\Entity(repositoryClass=InscriptionRepository::class)
 * @ORM\Table(name="`inscription`")
 */
#[ApiResource]
class Inscription
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="array", nullable=true)
     */
    private array $name = [];

     /**
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre prénom ne peut pas contenir de chiffre"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre prénom ne peut pas contenir de chiffre"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     *  @Assert\Length(
     *      min = 9,
     *      max = 13,
     *      minMessage = "Votre n° de passeport doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Votre n° d'identification nationale doit comporter au moins {{ limit }} caractères"
     * )
     * @ORM\Column(type="decimal", precision=15, scale=0)
     */
    private $nin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

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
    private $situationMatrimoniale;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $color;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomCooperative;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $nbreDePersonneACharge;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomBanque;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="membre_cooperative_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $membreCooperative;

    /**
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="compte_bancaire_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $compteBancaire;

    /**
     * 
     * @ORM\ManyToOne(targetEntity=Details1::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="beneficiaire_appui_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")

     */
    private $beneficiaireAppui;

    /**
     * @ORM\ManyToOne(targetEntity=Details2::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="logement_actuel_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")

     */
    private $logementActuel;

    /**
     * @ORM\ManyToOne(targetEntity=Details3::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="situation_professionelle_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $situationProfessionelle;

    /**
     * @ORM\ManyToOne(targetEntity=Details4::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="secteur_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $secteur;

    /**
     * @ORM\ManyToOne(targetEntity=Details5::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="type_de_contrat_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $typeDeContrat;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="ville_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDeBien::class, inversedBy="inscriptions")
     *  @ORM\JoinColumn(name="type_de_logement_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $typeDeLogement;

    /**
     * @ORM\ManyToOne(targetEntity=Details6::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="qualite_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $qualite;

    /**
     * @ORM\ManyToOne(targetEntity=Details7::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="handicap_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $handicap;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomEntreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $revenuMensuel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salaireMensuel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activiteNonSalarie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieuActiviteNonSalarie;

    /**
     * @ORM\ManyToOne(targetEntity=Achat::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="moode_acquisition_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $moodeAcquisition;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="source_ou_agence_id", nullable=true, referencedColumnName="id", onDelete="CASCADE")
     */
    private $sourceOuAgence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $label;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    
     /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param array $name
     * @return Inscription
     */
    public function setName(array $name): Inscription
    {
        $this->nom = $name;

        return $this;
    }

     /**
     * Get pattern="/\d/",
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pattern="/\d/",
     *
     * @return  self
     */ 
    public function setNom($nom)
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

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->lieuDeNaissance;
    }

    public function setLieuDeNaissance(string $lieuDeNaissance): self
    {
        $this->lieuDeNaissance = $lieuDeNaissance;

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

    public function getNin(): ?string
    {
        return $this->nin;
    }

    public function setNin(string $nin): self
    {
        $this->nin = $nin;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
        return $this->situationMatrimoniale;
    }

    public function setSituationMatrimoniale(string $situationMatrimoniale): self
    {
        $this->situationMatrimoniale = $situationMatrimoniale;

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

    public function setColor(string $color): self
    {
        $this->color = $color;

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

    public function getNomCooperative(): ?string
    {
        return $this->nomCooperative;
    }

    public function setNomCooperative(?string $nomCooperative): self
    {
        $this->nomCooperative = $nomCooperative;

        return $this;
    }

    public function getNbreDePersonneACharge(): ?string
    {
        return $this->nbreDePersonneACharge;
    }

    public function setNbreDePersonneACharge(string $nbreDePersonneACharge): self
    {
        $this->nbreDePersonneACharge = $nbreDePersonneACharge;

        return $this;
    }

    public function getNomBanque(): ?string
    {
        return $this->nomBanque;
    }

    public function setNomBanque(?string $nomBanque): self
    {
        $this->nomBanque = $nomBanque;

        return $this;
    }

    public function getMembreCooperative(): ?Details1
    {
        return $this->membreCooperative;
    }

    public function setMembreCooperative(?Details1 $membreCooperative): self
    {
        $this->membreCooperative = $membreCooperative;

        return $this;
    }

    public function getCompteBancaire(): ?Details1
    {
        return $this->compteBancaire;
    }

    public function setCompteBancaire(?Details1 $compteBancaire): self
    {
        $this->compteBancaire = $compteBancaire;

        return $this;
    }

    public function getBeneficiaireAppui(): ?Details1
    {
        return $this->beneficiaireAppui;
    }

    public function setBeneficiaireAppui(?Details1 $beneficiaireAppui): self
    {
        $this->beneficiaireAppui = $beneficiaireAppui;

        return $this;
    }

    public function getLogementActuel(): ?Details2
    {
        return $this->logementActuel;
    }

    public function setLogementActuel(?Details2 $logementActuel): self
    {
        $this->logementActuel = $logementActuel;

        return $this;
    }

    public function getSituationProfessionelle(): ?Details3
    {
        return $this->situationProfessionelle;
    }

    public function setSituationProfessionelle(?Details3 $situationProfessionelle): self
    {
        $this->situationProfessionelle = $situationProfessionelle;

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
        return $this->typeDeContrat;
    }

    public function setTypeDeContrat(?Details5 $typeDeContrat): self
    {
        $this->typeDeContrat = $typeDeContrat;

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

    public function getTypeDeLogement(): ?TypeDeBien
    {
        return $this->typeDeLogement;
    }

    public function setTypeDeLogement(?TypeDeBien $typeDeLogement): self
    {
        $this->typeDeLogement = $typeDeLogement;

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

    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    public function getRevenuMensuel(): ?string
    {
        return $this->revenuMensuel;
    }

    public function setRevenuMensuel(?string $revenuMensuel): self
    {
        $this->revenuMensuel = $revenuMensuel;

        return $this;
    }

    public function getSalaireMensuel(): ?string
    {
        return $this->salaireMensuel;
    }

    public function setSalaireMensuel(?string $salaireMensuel): self
    {
        $this->salaireMensuel = $salaireMensuel;

        return $this;
    }

    public function getActiviteNonSalarie(): ?string
    {
        return $this->activiteNonSalarie;
    }

    public function setActiviteNonSalarie(?string $activiteNonSalarie): self
    {
        $this->activiteNonSalarie = $activiteNonSalarie;

        return $this;
    }

    public function getLieuActiviteNonSalarie(): ?string
    {
        return $this->lieuActiviteNonSalarie;
    }

    public function setLieuActiviteNonSalarie(?string $lieuActiviteNonSalarie): self
    {
        $this->lieuActiviteNonSalarie = $lieuActiviteNonSalarie;

        return $this;
    }

    public function getMoodeAcquisition(): ?Achat
    {
        return $this->moodeAcquisition;
    }

    public function setMoodeAcquisition(?Achat $moodeAcquisition): self
    {
        $this->moodeAcquisition = $moodeAcquisition;

        return $this;
    }

    public function getSourceOuAgence(): ?Agence
    {
        return $this->sourceOuAgence;
    }

    public function setSourceOuAgence(?Agence $sourceOuAgence): self
    {
        $this->sourceOuAgence = $sourceOuAgence;

        return $this;
    }

    public function __toString()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
    public function getExportData()
    {
        return \array_merge([
            'Client_id' => $this->id,
            'Reference_candidature' => $this->label,
            'Source' => $this->sourceOuAgence,
            'Prenom' => $this->prenom,
            'Nom' => $this->nom,
            'Date_de_Naissance' => $this->dateDeNaissance->format('d.m.Y'),
            'Lieu_de_Naissance' => $this->lieuDeNaissance,
            'Nationalité' => $this->nationalite,
            'Adresse' => $this->adresse,
            'Ville' => $this->ville,
            'NIN_ou_N°_Passeport' => $this->nin,
            'Situation_Matrimoniale' => $this->situationMatrimoniale,
            'N°_Tel' => $this->tel,
            'Email' => $this->email,
            'Type_de_logement' => $this->typeDeLogement,
            'Mode_acquisition' => $this->moodeAcquisition,
            'Membre_cooperative' => $this->membreCooperative,
            'Nom_de_la_coopérative' => $this->nomCooperative,
            'Beneficiaire_appui_ou_subvention' => $this->beneficiaireAppui,
            'Logement_actuel' => $this->logementActuel,
            'Qualité' => $this->qualite,
            'Handicap' => $this->handicap,
            'Situation' => $this->situationProfessionelle,
            'Secteur' => $this->secteur,
            'Nom_Employeur' => $this->nomEntreprise,
            'Domaine_d\'activite' => $this->activiteNonSalarie,
            'Lieu_d\'activite' => $this->lieuActiviteNonSalarie,
            'Type_de_Contrat' => $this->typeDeContrat,
            'Compta_bancaire' => $this->compteBancaire,
            'Nom_de_la_banque' => $this->nomBanque,
            'Personne_à_charge' => $this->nbreDePersonneACharge,
            'Revenu_Mensuel' => $this->revenuMensuel,
            'Salaire_Mensuel' => $this->salaireMensuel,
            'Date_de_Création' => $this->createdAt->format('d.m.Y H:m'),

        ], );

        $object = new Inscription();
        echo $object->getExportData();
        echo $object->getExportData;
    }

   

   
}
