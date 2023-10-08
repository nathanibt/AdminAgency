<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231008093619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE models ADD identifiant VARCHAR(255) NOT NULL, ADD mdp VARCHAR(255) NOT NULL, DROP id_of, DROP mdp_of');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE models ADD id_of VARCHAR(255) NOT NULL, ADD mdp_of VARCHAR(255) NOT NULL, DROP identifiant, DROP mdp');
    }
}
