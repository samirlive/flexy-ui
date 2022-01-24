<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124161747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_shop_category_product_shop (product_shop_id INT NOT NULL, category_product_shop_id INT NOT NULL, INDEX IDX_749C41099CCFDF6D (product_shop_id), INDEX IDX_749C4109C446833F (category_product_shop_id), PRIMARY KEY(product_shop_id, category_product_shop_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product_shop_category_product_shop ADD CONSTRAINT FK_749C41099CCFDF6D FOREIGN KEY (product_shop_id) REFERENCES shop_product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_shop_category_product_shop ADD CONSTRAINT FK_749C4109C446833F FOREIGN KEY (category_product_shop_id) REFERENCES shop_categoryproduct (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product_shop_category_product_shop');
    }
}
