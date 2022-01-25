<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124211614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_shop_category_product_shop DROP FOREIGN KEY FK_749C4109C446833F');
        $this->addSql('DROP TABLE product_shop_category_product_shop');
        $this->addSql('DROP TABLE shop_categoryproduct');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_shop_category_product_shop (product_shop_id INT NOT NULL, category_product_shop_id INT NOT NULL, INDEX IDX_749C41099CCFDF6D (product_shop_id), INDEX IDX_749C4109C446833F (category_product_shop_id), PRIMARY KEY(product_shop_id, category_product_shop_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE shop_categoryproduct (id INT NOT NULL, vendor_id INT DEFAULT NULL, INDEX IDX_CC622D61F603EE73 (vendor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE product_shop_category_product_shop ADD CONSTRAINT FK_749C41099CCFDF6D FOREIGN KEY (product_shop_id) REFERENCES shop_product (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_shop_category_product_shop ADD CONSTRAINT FK_749C4109C446833F FOREIGN KEY (category_product_shop_id) REFERENCES shop_categoryproduct (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shop_categoryproduct ADD CONSTRAINT FK_CC622D61F603EE73 FOREIGN KEY (vendor_id) REFERENCES vendor (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
