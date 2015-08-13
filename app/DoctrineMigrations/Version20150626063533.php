<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150626063533 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
         $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");      
         $this->updateProductWithMobiles();
    }
    

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
    //update product by merging mobile_devices and mobile_chargers
    private function updateProductWithMobiles()
    {
        $this->addSql("INSERT INTO product( productname, ownername, os, serialnumber, version, created_id, createddate, lastmodifieddate, active, available ) 
        (SELECT device_name, device_owner, device_os, device_udid, device_version, device_created_by, device_created_date, device_last_modified_date, device_status,
        STATUS
        FROM mobile_devices)");
        $this->updateCategoryIdForMobiles();
    }
     
    private function updateCategoryIdForMobiles()
    {
        $this->addSql("UPDATE product SET category_id = '134'");
        $this->updateChargerName();
    }
    
    private function updateChargerName()
    {
        $this->addSql("UPDATE mobile_chargers SET charger_name = CONCAT( charger_cable_type, '(', charger_type, '-', charger_tag ,')')");
    }
}
