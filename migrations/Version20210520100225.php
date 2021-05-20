<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520100225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE details7 (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE details_candidature ADD handicap_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE details_candidature ADD CONSTRAINT FK_8841F947B996CB29 FOREIGN KEY (handicap_id) REFERENCES details7 (id)');
        $this->addSql('CREATE INDEX IDX_8841F947B996CB29 ON details_candidature (handicap_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_candidature DROP FOREIGN KEY FK_8841F947B996CB29');
        $this->addSql('DROP TABLE details7');
        $this->addSql('DROP INDEX IDX_8841F947B996CB29 ON details_candidature');
        $this->addSql('ALTER TABLE details_candidature DROP handicap_id');
    }
}
