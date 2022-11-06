<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221103164034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP image_original_name, DROP image_mime_type, DROP image_dimensions, CHANGE image_name image_name VARCHAR(255) NOT NULL, CHANGE image_size image_size INT NOT NULL, CHANGE date updated_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD image_original_name VARCHAR(255) DEFAULT NULL, ADD image_mime_type VARCHAR(255) DEFAULT NULL, ADD image_dimensions LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE image_name image_name VARCHAR(255) DEFAULT NULL, CHANGE image_size image_size INT DEFAULT NULL, CHANGE updated_at date DATETIME NOT NULL');
    }
}
