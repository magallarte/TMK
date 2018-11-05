<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181105151430 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE member CHANGE member_password member_password VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE kid ADD CONSTRAINT FK_4523887C1AA6F9D7 FOREIGN KEY (kid_gender_id) REFERENCES gender (id)');
        $this->addSql('CREATE INDEX IDX_4523887C1AA6F9D7 ON kid (kid_gender_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kid DROP FOREIGN KEY FK_4523887C1AA6F9D7');
        $this->addSql('DROP INDEX IDX_4523887C1AA6F9D7 ON kid');
        $this->addSql('ALTER TABLE member CHANGE member_password member_password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
