<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210416104458 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456BD95B80F');
        $this->addSql('DROP INDEX IDX_26A98456BD95B80F ON achat');
        $this->addSql('ALTER TABLE achat DROP bien_id');
        $this->addSql('ALTER TABLE bien ADD achat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386FE95D117 FOREIGN KEY (achat_id) REFERENCES achat (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_45EDC386FE95D117 ON bien (achat_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat ADD bien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456BD95B80F FOREIGN KEY (bien_id) REFERENCES bien (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_26A98456BD95B80F ON achat (bien_id)');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386FE95D117');
        $this->addSql('DROP INDEX IDX_45EDC386FE95D117 ON bien');
        $this->addSql('ALTER TABLE bien DROP achat_id');
    }
}
