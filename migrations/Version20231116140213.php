<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116140213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amenagement ADD prestation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE amenagement ADD CONSTRAINT FK_4FF554219E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)');
        $this->addSql('CREATE INDEX IDX_4FF554219E45C554 ON amenagement (prestation_id)');
        $this->addSql('ALTER TABLE paysagisme ADD prestation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paysagisme ADD CONSTRAINT FK_25ECA11B9E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)');
        $this->addSql('CREATE INDEX IDX_25ECA11B9E45C554 ON paysagisme (prestation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amenagement DROP FOREIGN KEY FK_4FF554219E45C554');
        $this->addSql('DROP INDEX IDX_4FF554219E45C554 ON amenagement');
        $this->addSql('ALTER TABLE amenagement DROP prestation_id');
        $this->addSql('ALTER TABLE paysagisme DROP FOREIGN KEY FK_25ECA11B9E45C554');
        $this->addSql('DROP INDEX IDX_25ECA11B9E45C554 ON paysagisme');
        $this->addSql('ALTER TABLE paysagisme DROP prestation_id');
    }
}
