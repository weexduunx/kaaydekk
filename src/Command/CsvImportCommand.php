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
            ->setLabel($row['label'])
            ->setSourceOuAgence($row['Source'])
            ->setPrenom($row['prenom'])
            ->setNom($row['nom'])
            ->setDateDeNaissance($row['date_de_naissance'])
            ->setLieuDeNaissance($row['lieu_de_naissance'])
            ->setNationalite($row['adresse'])
            ->setAdresse($row['adresse'])
            ->setVille($row['adresse'])
            ->setNin($row['nin'])
            ->setSituationMatrimoniale($row['situation_matrimoniale'])
            ->setTel($row['tel'])
            ->setEmail($row['email'])
            ->setTypeDeLogement($row['Type_de_logement'])
            ->setMoodeAcquisition($row['Mode_acquisition'])
            ->setMembreCooperative($row['Membre_cooperative'])
            ->setNomCooperative($row['client_id'])
            ->setBeneficiaireAppui($row['client_id'])
            ->setLogementActuel($row['client_id'])
            ->setQualite($row['client_id'])
            ->setHandicap($row['client_id'])
            ->setSituationProfessionelle($row['client_id'])
            ->setSecteur($row['client_id'])
            ->setNomEntreprise($row['client_id'])
            ->setActiviteNonSalarie($row['client_id'])
            ->setLieuActiviteNonSalarie($row['client_id'])
            ->setTypeDeContrat($row['client_id'])
            ->setCompteBancaire($row['client_id'])
            ->setNomBanque($row['client_id'])
            ->setNbreDePersonneACharge()
            ->setRevenuMensuel($row['client_id'])
            ->setSalaireMensuel($row['client_id'])
            ->setCreatedAt($row['client_id'])
            ;

        $this->em->persist($inscription);


        }

       

        $this->em->flush();

        $io->success('Flux importer avec succées');
    }
}