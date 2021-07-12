<?php

namespace App\Command;

use App\Entity\Agence;
use App\Entity\Inscription;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use League\Csv\Reader;

class CsvImportCommand extends Command
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();

        $this->em = $em;

    }

    protected function configure()
    {
        $this
        ->setName('csv:import')
        ->setDescription('Importer un fichier CSV')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input,$output);

        $io->title('Tentative d\'importation de flux ...');

        $reader = Reader::createFromPath('%kernel.root_dir%/../src/App/Data/inscription.csv');

        $result = $reader->fetchAssoc();

        foreach ($result as $row){

            $inscription = (new Inscription())
            ->setId($row['client_id'])
            ->setLabel($row['Reference_candidature'])
            ->setSourceOuAgence($row['Source'])
            ->setPrenom($row['Prenom'])
            ->setNom($row['Nom'])
            ->setDateDeNaissance($row['Date_de_Naissance'])
            ->setLieuDeNaissance($row['Lieu_de_Naissance'])
            ->setNationalite($row['Nationalité'])
            ->setAdresse($row['Adresse'])
            ->setVille($row['Ville'])
            ->setNin($row['NIN_ou_N°_Passeport'])
            ->setSituationMatrimoniale($row['Situation_Matrimoniale'])
            ->setProfession($row['profession'])
            ->setTel($row['N°_Tel'])
            ->setEmail($row['Email'])
            ->setTypeDeLogement($row['Type_de_logement'])
            ->setMoodeAcquisition($row['Mode_acquisition'])
            ->setMembreCooperative($row['Membre_cooperative'])
            ->setNomCooperative($row['Nom_de_la_coopérative'])
            ->setBeneficiaireAppui($row['Beneficiaire_appui_ou_subvention'])
            ->setLogementActuel($row['Logement_actuel'])
            ->setQualite($row['Qualité'])
            ->setHandicap($row['Handicap'])
            ->setSituationProfessionelle($row['Situation'])
            ->setSecteur($row['Secteur'])
            ->setNomEntreprise($row['Nom_Employeur'])
            ->setActiviteNonSalarie($row['Domaine_d\'activite'])
            ->setLieuActiviteNonSalarie($row['Lieu_d\'activite'])
            ->setTypeDeContrat($row['Type_de_Contrat'])
            ->setCompteBancaire($row['Compta_bancaire'])
            ->setNomBanque($row['Nom_de_la_banque'])
            ->setNbreDePersonneACharge($row['Personne_à_charge'])
            ->setRevenuMensuel($row['Revenu_Mensuel'])
            ->setSalaireMensuel($row['Salaire_Mensuel'])
            ->setCreatedAt($row['Date_de_Création'])
            ;

        $this->em->persist($inscription);


        }

        $this->em->flush();

        $io->success('Flux importer avec succées');
    }
}