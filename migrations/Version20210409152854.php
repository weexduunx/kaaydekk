<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409152854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE details2 (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE details_candidature ADD logement_actuel_id INT NOT NULL');
        $this->addSql('ALTER TABLE details_candidature ADD CONSTRAINT FK_8841F9479CA5B79A FOREIGN KEY (logement_actuel_id) REFERENCES details2 (id)');
        $this->addSql('CREATE INDEX IDX_8841F9479CA5B79A ON details_candidature (logement_actuel_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_candidature DROP FOREIGN KEY FK_8841F9479CA5B79A');
        $this->addSql('DROP TABLE details2');
        $this->addSql('DROP INDEX IDX_8841F9479CA5B79A ON details_candidature');
        $this->addSql('ALTER TABLE details_candidature DROP logement_actuel_id');
    }
}
