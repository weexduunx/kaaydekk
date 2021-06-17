<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210526192619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_candidature ADD agence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE details_candidature ADD CONSTRAINT FK_8841F947D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('CREATE INDEX IDX_8841F947D725330D ON details_candidature (agence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_candidature DROP FOREIGN KEY FK_8841F947D725330D');
        $this->addSql('DROP INDEX IDX_8841F947D725330D ON details_candidature');
        $this->addSql('ALTER TABLE details_candidature DROP agence_id');
    }
}