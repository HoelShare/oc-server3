<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Migration to add syslog_maillog_lastdate to table sysconfig.
 */
class Version20170510222222 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('INSERT IGNORE INTO sysconfig VALUES (\'syslog_maillog_lastdate\', \'2017-05-01 00:00:01\')');
    }
    
    public function down(Schema $schema): void
    {
    }
}
