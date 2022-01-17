<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220117102656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `table` CHANGE canvas_x canvas_x DOUBLE PRECISION DEFAULT NULL, CHANGE canvas_y canvas_y DOUBLE PRECISION DEFAULT NULL, CHANGE canvas_height canvas_height DOUBLE PRECISION DEFAULT NULL, CHANGE canvas_width canvas_width DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `table` CHANGE canvas_x canvas_x INT DEFAULT NULL, CHANGE canvas_y canvas_y INT DEFAULT NULL, CHANGE canvas_height canvas_height INT DEFAULT NULL, CHANGE canvas_width canvas_width INT DEFAULT NULL');
    }
}
