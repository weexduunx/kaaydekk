<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630132030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D611CD1DEC');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D61BFED79');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D63066DC54');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D645FCA72E');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D67C16B4E8');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D69CA5B79A');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D69F7E4405');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6A6338570');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6A73F0036');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6AF1E371E');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6B639564E');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6B996CB29');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6E18D5CF3');
        $this->addSql('ALTER TABLE inscription ADD label VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D611CD1DEC FOREIGN KEY (type_de_contrat_id) REFERENCES details5 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D61BFED79 FOREIGN KEY (source_ou_agence_id) REFERENCES agence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D63066DC54 FOREIGN KEY (beneficiaire_appui_id) REFERENCES details1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D645FCA72E FOREIGN KEY (membre_cooperative_id) REFERENCES details1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D67C16B4E8 FOREIGN KEY (type_de_logement_id) REFERENCES type_de_bien (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D69CA5B79A FOREIGN KEY (logement_actuel_id) REFERENCES details2 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D69F7E4405 FOREIGN KEY (secteur_id) REFERENCES details4 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6A6338570 FOREIGN KEY (qualite_id) REFERENCES details6 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6AF1E371E FOREIGN KEY (compte_bancaire_id) REFERENCES details1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6B639564E FOREIGN KEY (situation_professionelle_id) REFERENCES details3 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6B996CB29 FOREIGN KEY (handicap_id) REFERENCES details7 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6E18D5CF3 FOREIGN KEY (moode_acquisition_id) REFERENCES achat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D645FCA72E');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D6AF1E371E');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D63066DC54');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D69CA5B79A');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D6B639564E');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D69F7E4405');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D611CD1DEC');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D6A73F0036');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D67C16B4E8');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D6A6338570');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D6B996CB29');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D6E18D5CF3');
        $this->addSql('ALTER TABLE `inscription` DROP FOREIGN KEY FK_5E90F6D61BFED79');
        $this->addSql('ALTER TABLE `inscription` DROP label');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D645FCA72E FOREIGN KEY (membre_cooperative_id) REFERENCES details1 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D6AF1E371E FOREIGN KEY (compte_bancaire_id) REFERENCES details1 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D63066DC54 FOREIGN KEY (beneficiaire_appui_id) REFERENCES details1 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D69CA5B79A FOREIGN KEY (logement_actuel_id) REFERENCES details2 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D6B639564E FOREIGN KEY (situation_professionelle_id) REFERENCES details3 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D69F7E4405 FOREIGN KEY (secteur_id) REFERENCES details4 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D611CD1DEC FOREIGN KEY (type_de_contrat_id) REFERENCES details5 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D6A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D67C16B4E8 FOREIGN KEY (type_de_logement_id) REFERENCES type_de_bien (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D6A6338570 FOREIGN KEY (qualite_id) REFERENCES details6 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D6B996CB29 FOREIGN KEY (handicap_id) REFERENCES details7 (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D6E18D5CF3 FOREIGN KEY (moode_acquisition_id) REFERENCES achat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `inscription` ADD CONSTRAINT FK_5E90F6D61BFED79 FOREIGN KEY (source_ou_agence_id) REFERENCES agence (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
