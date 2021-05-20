<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520121644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_candidature ADD mode_acquisition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE details_candidature ADD CONSTRAINT FK_8841F947D9B1FE50 FOREIGN KEY (mode_acquisition_id) REFERENCES achat (id)');
        $this->addSql('CREATE INDEX IDX_8841F947D9B1FE50 ON details_candidature (mode_acquisition_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_candidature DROP FOREIGN KEY FK_8841F947D9B1FE50');
        $this->addSql('DROP INDEX IDX_8841F947D9B1FE50 ON details_candidature');
        $this->addSql('ALTER TABLE details_candidature DROP mode_acquisition_id');
    }
}
