<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220829125209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, commentaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comments_article (comments_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_FF3FDAA63379586 (comments_id), INDEX IDX_FF3FDAA7294869C (article_id), PRIMARY KEY(comments_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments_article ADD CONSTRAINT FK_FF3FDAA63379586 FOREIGN KEY (comments_id) REFERENCES comments (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments_article ADD CONSTRAINT FK_FF3FDAA7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments_article DROP FOREIGN KEY FK_FF3FDAA63379586');
        $this->addSql('ALTER TABLE comments_article DROP FOREIGN KEY FK_FF3FDAA7294869C');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE comments_article');
    }
}
