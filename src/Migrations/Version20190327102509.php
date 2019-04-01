<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327102509 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE logboek (id INT AUTO_INCREMENT NOT NULL, chauffeur_id INT NOT NULL, truck_id INT NOT NULL, klant_id INT NOT NULL, briefnr INT NOT NULL, datum DATE NOT NULL, kubs DOUBLE PRECISION NOT NULL, laadpunt VARCHAR(255) NOT NULL, vertrektijd TIME NOT NULL, eindpunt VARCHAR(255) NOT NULL, evenement VARCHAR(255) NOT NULL, INDEX IDX_13847B9A85C0B3BE (chauffeur_id), INDEX IDX_13847B9AC6957CCE (truck_id), INDEX IDX_13847B9A3C427B2F (klant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A85C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9AC6957CCE FOREIGN KEY (truck_id) REFERENCES truck (id)');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A3C427B2F FOREIGN KEY (klant_id) REFERENCES fos_user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE logboek');
    }
}
