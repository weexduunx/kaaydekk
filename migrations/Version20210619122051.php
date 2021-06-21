<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210619122051 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details4 ADD details3_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE details4 ADD CONSTRAINT FK_FEA9570DA9BEBEFB FOREIGN KEY (details3_id) REFERENCES details3 (id)');
        $this->addSql('CREATE INDEX IDX_FEA9570DA9BEBEFB ON details4 (details3_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details4 DROP FOREIGN KEY FK_FEA9570DA9BEBEFB');
        $this->addSql('DROP INDEX IDX_FEA9570DA9BEBEFB ON details4');
        $this->addSql('ALTER TABLE details4 DROP details3_id');
    }
}
