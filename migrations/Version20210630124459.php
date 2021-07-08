<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630124459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscription (id INT AUTO_INCREMENT NOT NULL, membre_cooperative_id INT DEFAULT NULL, compte_bancaire_id INT DEFAULT NULL, beneficiaire_appui_id INT DEFAULT NULL, logement_actuel_id INT DEFAULT NULL, situation_professionelle_id INT DEFAULT NULL, secteur_id INT DEFAULT NULL, type_de_contrat_id INT DEFAULT NULL, ville_id INT DEFAULT NULL, type_de_logement_id INT DEFAULT NULL, qualite_id INT DEFAULT NULL, handicap_id INT DEFAULT NULL, moode_acquisition_id INT DEFAULT NULL, source_ou_agence_id INT DEFAULT NULL, nom LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', prenom VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, lieu_de_naissance VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, nin NUMERIC(15, 0) NOT NULL, tel VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, nationalite VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, situation_matrimoniale VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', color VARCHAR(7) NOT NULL, status TINYINT(1) NOT NULL, nom_cooperative VARCHAR(255) DEFAULT NULL, nbre_de_personne_acharge NUMERIC(10, 0) NOT NULL, nom_banque VARCHAR(255) DEFAULT NULL, nom_entreprise VARCHAR(255) DEFAULT NULL, revenu_mensuel VARCHAR(255) DEFAULT NULL, salaire_mensuel VARCHAR(255) DEFAULT NULL, activite_non_salarie VARCHAR(255) DEFAULT NULL, lieu_activite_non_salarie VARCHAR(255) DEFAULT NULL, INDEX IDX_5E90F6D645FCA72E (membre_cooperative_id), INDEX IDX_5E90F6D6AF1E371E (compte_bancaire_id), INDEX IDX_5E90F6D63066DC54 (beneficiaire_appui_id), INDEX IDX_5E90F6D69CA5B79A (logement_actuel_id), INDEX IDX_5E90F6D6B639564E (situation_professionelle_id), INDEX IDX_5E90F6D69F7E4405 (secteur_id), INDEX IDX_5E90F6D611CD1DEC (type_de_contrat_id), INDEX IDX_5E90F6D6A73F0036 (ville_id), INDEX IDX_5E90F6D67C16B4E8 (type_de_logement_id), INDEX IDX_5E90F6D6A6338570 (qualite_id), INDEX IDX_5E90F6D6B996CB29 (handicap_id), INDEX IDX_5E90F6D6E18D5CF3 (moode_acquisition_id), INDEX IDX_5E90F6D61BFED79 (source_ou_agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D645FCA72E FOREIGN KEY (membre_cooperative_id) REFERENCES details1 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6AF1E371E FOREIGN KEY (compte_bancaire_id) REFERENCES details1 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D63066DC54 FOREIGN KEY (beneficiaire_appui_id) REFERENCES details1 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D69CA5B79A FOREIGN KEY (logement_actuel_id) REFERENCES details2 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6B639564E FOREIGN KEY (situation_professionelle_id) REFERENCES details3 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D69F7E4405 FOREIGN KEY (secteur_id) REFERENCES details4 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D611CD1DEC FOREIGN KEY (type_de_contrat_id) REFERENCES details5 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D67C16B4E8 FOREIGN KEY (type_de_logement_id) REFERENCES type_de_bien (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6A6338570 FOREIGN KEY (qualite_id) REFERENCES details6 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6B996CB29 FOREIGN KEY (handicap_id) REFERENCES details7 (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6E18D5CF3 FOREIGN KEY (moode_acquisition_id) REFERENCES achat (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D61BFED79 FOREIGN KEY (source_ou_agence_id) REFERENCES agence (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscription');
    }
}
