<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230801213923 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD address_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64948E1E977 FOREIGN KEY (address_id_id) REFERENCES address (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64948E1E977 ON user (address_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D64948E1E977');
        $this->addSql('DROP INDEX IDX_8D93D64948E1E977 ON `user`');
        $this->addSql('ALTER TABLE `user` DROP address_id_id');
    }
}
