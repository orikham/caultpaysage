<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116135227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles ADD admin_id_id INT DEFAULT NULL, ADD pi_co_id INT DEFAULT NULL, ADD presta_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168DF6E65AD FOREIGN KEY (admin_id_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168E530B07 FOREIGN KEY (pi_co_id) REFERENCES picture_cover (id)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168BA2F97F0 FOREIGN KEY (presta_id) REFERENCES prestation (id)');
        $this->addSql('CREATE INDEX IDX_BFDD3168DF6E65AD ON articles (admin_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BFDD3168E530B07 ON articles (pi_co_id)');
        $this->addSql('CREATE INDEX IDX_BFDD3168BA2F97F0 ON articles (presta_id)');
        $this->addSql('ALTER TABLE picture_after ADD articles_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picture_after ADD CONSTRAINT FK_99EC90F1EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id)');
        $this->addSql('CREATE INDEX IDX_99EC90F1EBAF6CC ON picture_after (articles_id)');
        $this->addSql('ALTER TABLE picture_before ADD articles_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picture_before ADD CONSTRAINT FK_49DFEBBE1EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id)');
        $this->addSql('CREATE INDEX IDX_49DFEBBE1EBAF6CC ON picture_before (articles_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168DF6E65AD');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168E530B07');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168BA2F97F0');
        $this->addSql('DROP INDEX IDX_BFDD3168DF6E65AD ON articles');
        $this->addSql('DROP INDEX UNIQ_BFDD3168E530B07 ON articles');
        $this->addSql('DROP INDEX IDX_BFDD3168BA2F97F0 ON articles');
        $this->addSql('ALTER TABLE articles DROP admin_id_id, DROP pi_co_id, DROP presta_id');
        $this->addSql('ALTER TABLE picture_after DROP FOREIGN KEY FK_99EC90F1EBAF6CC');
        $this->addSql('DROP INDEX IDX_99EC90F1EBAF6CC ON picture_after');
        $this->addSql('ALTER TABLE picture_after DROP articles_id');
        $this->addSql('ALTER TABLE picture_before DROP FOREIGN KEY FK_49DFEBBE1EBAF6CC');
        $this->addSql('DROP INDEX IDX_49DFEBBE1EBAF6CC ON picture_before');
        $this->addSql('ALTER TABLE picture_before DROP articles_id');
    }
}
