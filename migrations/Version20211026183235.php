<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211026183235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE film ADD salledeprogection_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT FK_8244BE22E97E23C4 FOREIGN KEY (salledeprogection_id) REFERENCES salle_de_projection (id)');
        $this->addSql('CREATE INDEX IDX_8244BE22E97E23C4 ON film (salledeprogection_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY FK_8244BE22E97E23C4');
        $this->addSql('DROP INDEX IDX_8244BE22E97E23C4 ON film');
        $this->addSql('ALTER TABLE film DROP salledeprogection_id');
    }
}
