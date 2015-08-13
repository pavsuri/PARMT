<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140520094804 extends AbstractMigration
{
    /**
     * Up operation.
     * 
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");      
        $this->createNewTablesForNiti();
        $this->alterTablesForNITI();
        $this->updateUsers();
        $this->updateWorkProfile();
    }
    
    /**
     * Down operation.
    */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
    
    private function updateUsers()
    {
        $this->addSql("update users u 
        INNER JOIN user_personal_profile upp ON upp.user_id = u.id
        INNER JOIN user_work_profile uwp ON uwp.user_id = u.id
        set u.user_personal_profile_id = upp.id, u.user_work_profile_id = uwp.id");
    }

    private function createNewTablesForNiti()
    {
        $this->addSql("CREATE TABLE IF NOT EXISTS `activity` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(100) NOT NULL,`status` tinyint(1) NOT NULL DEFAULT '0',PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ");
        $this->insertDataIntoActivity();
        $this->addSql("CREATE TABLE IF NOT EXISTS `band` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(100) NOT NULL,`status` tinyint(1) NOT NULL DEFAULT '1',PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10") ;
        $this->insertDataIntoBand();
        $this->addSql("CREATE TABLE IF NOT EXISTS `category` (`id` int(5) NOT NULL AUTO_INCREMENT,`name` varchar(20) NOT NULL,`active` varchar(20) NOT NULL,`available` int(25) NOT NULL,`created_id` int(200) NOT NULL,`createddate` datetime NOT NULL,`lastmodifieddate` datetime NOT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `custom_skill` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(250) NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `menus` (`id` int(100) NOT NULL AUTO_INCREMENT,`name` varchar(50) NOT NULL,`status` tinyint(1) NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11") ;
        $this->insertDataIntoMenus();
        $this->addSql("CREATE TABLE IF NOT EXISTS `product` (`id` int(200) NOT NULL AUTO_INCREMENT,`category_id` varchar(200) NOT NULL,`productname` varchar(200) NOT NULL,`ownername` varchar(40) DEFAULT NULL,`os` varchar(200) NOT NULL,`brand` varchar(200) NOT NULL,`serialnumber` varchar(200) NOT NULL,`version` varchar(200) DEFAULT NULL,`description` varchar(500) NOT NULL,`created_id` int(200) NOT NULL,`createddate` datetime NOT NULL,`lastmodifieddate` datetime NOT NULL,`active` int(2) NOT NULL,`available` int(2) NOT NULL,`product_status_id` int(11) DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `product_queue` (`id` int(200) NOT NULL AUTO_INCREMENT,`product_id` int(200) NOT NULL,`user_id` int(200) NOT NULL,`starttime` datetime NOT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `product_status` (`id` int(200) NOT NULL AUTO_INCREMENT,`product_id` int(200) NOT NULL,`user_id` int(200) NOT NULL,`starttime` datetime NOT NULL,`expectedendtime` datetime NOT NULL,`submittedtime` datetime DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `registration` (`id` int(20) NOT NULL AUTO_INCREMENT,`name` varchar(200) NOT NULL,`empId` varchar(20) NOT NULL,`password` varchar(200) NOT NULL,`email` varchar(50) NOT NULL,`dob` date DEFAULT NULL,`mobile` int(11) NOT NULL,`gender` varchar(10) NOT NULL,`doj` date NOT NULL,`image` text NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `skill` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(250) NOT NULL,`status` tinyint(4) NOT NULL DEFAULT '1',PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5") ;
        $this->insertDataIntoSkill();
        $this->addSql("CREATE TABLE IF NOT EXISTS `user_personal_profile` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(100) NOT NULL,`employee_id` varchar(7) DEFAULT NULL,`dob` date DEFAULT NULL,`doj` date DEFAULT NULL,`dojj` date DEFAULT NULL,`mobile` varchar(25) NOT NULL,`photo` text,`email` varchar(250) NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=305") ;
        $this->insertDataIntoUserPersonalProfile();
        $this->addSql("CREATE TABLE IF NOT EXISTS `user_skills` (`id` int(11) NOT NULL AUTO_INCREMENT,`user_id` int(11) NOT NULL,`skill_type` int(1) NOT NULL DEFAULT '1',`skill_id` int(11) NOT NULL,`experience` int(11) DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `user_task` (`id` int(11) NOT NULL AUTO_INCREMENT,`user_id` int(11) NOT NULL,`project_id` int(11) NOT NULL,`activity_id` int(11) NOT NULL,`duration_of_task` bigint(11) NOT NULL,`status` enum('saved','pending','rejected','approved') NOT NULL DEFAULT 'saved',`task_description` varchar(150) NOT NULL,`date` date NOT NULL,`updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8") ;
        $this->addSql("CREATE TABLE IF NOT EXISTS `user_work_profile` (`id` int(11) NOT NULL AUTO_INCREMENT,`department_id` int(11) DEFAULT NULL,`designation_id` int(11) DEFAULT NULL,`band_id` int(11) DEFAULT NULL,`extension_number` int(8) NOT NULL,`highest_education` varchar(255) DEFAULT NULL,`passedout_year` int(11) DEFAULT NULL,`total_experience` float NOT NULL,`doj` date NOT NULL,`work_station` varchar(80) NOT NULL,`system_ip` varchar(25) NOT NULL,`system_id` varchar(30) NOT NULL,`asset_tag` varchar(50) NOT NULL,`gtalk_id` varchar(100) DEFAULT NULL,`skype_id` varchar(100) DEFAULT NULL,`team_id` int(11) DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=302") ;
        $this->insertDataIntoUserWorkProfile();
        $this->addSql("CREATE TABLE IF NOT EXISTS `liveapps` (`id` int(11) NOT NULL AUTO_INCREMENT,`os` varchar(200) NOT NULL,`appname` varchar(250) NOT NULL,`version` varchar(50) NOT NULL,`applink` varchar(500) NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ");
        $this->insertDataIntoLiveApps();
    }
      private function insertDataIntoLiveApps()
    {
        $this->addSql("INSERT INTO `liveapps` (`id`, `os`, `appname`, `version`, `applink`) VALUES
            (1, 'iOS', 'PaleoDigest', '1.1.0', 'https://itunes.apple.com/us/app/paleo-digest-healthy-food/id977837520?mt=8'),
            (2, 'iOS', 'Diet-to-Go\r\n', '1.2', 'https://itunes.apple.com/us/app/diet-to-go-healthy-weight/id891613761?mt=8'),
            (3, 'iOS', 'myProvant\r\n', '1.1', 'https://itunes.apple.com/us/app/myprovant/id953395276?mt=8'),
            (4, 'iOS', 'MKSales application\r\n', '1', 'Waiting For review\r\n'),
            (5, 'iOS', 'SpiceJet\r\n', '1', 'Waiting For review\r\n'),
            (6, 'iOS', 'doTERRA Korea (Visible for Korea users)\r\n', '1', 'https://itunes.apple.com/us/app/doterra-korea/id984535249?ls=1&mt=8'),
            (7, 'iOS', 'doTERRA Japan (Visible for japan users)\r\n', '1', 'https://itunes.apple.com/us/app/doterra-japan/id993559958?ls=1&mt=8'),
            (8, 'iOS', 'doTERRA', '1.2', 'https://itunes.apple.com/gb/app/doterra/id956782069?mt=8'),
            (9, 'iOS', 'ASRPRO-iPad\r\n', '1.1.3', 'https://itunes.apple.com/us/app/dealertrack-service-check-in/id907379407?mt=8'),
            (10, 'iOS', 'Ready Point\r\n', '1.2', 'https://itunes.apple.com/us/app/readypoint/id934290456?mt=8'),
            (11, 'iOS', 'ASRPRO-Iphone\r\n', '2.1', 'https://itunes.apple.com/in/app/id792694470'),
            (12, 'iOS', 'Runit\r\n', '2.2', 'https://itunes.apple.com/in/app/runit-open/id577877380?mt=8'),
            (13, 'iOS', 'Hand & Stone\r\n', '1', 'https://itunes.apple.com/us/app/hand-and-stone-mobile/id962029114?ls=1&mt=8'),
            (14, 'iOS', 'Go Greek Now\r\n', '1.5', 'https://itunes.apple.com/gb/app/gogreeknow/id967226959?mt=8'),
            (15, 'iOS', 'GFK\r\n', '1.2', 'https://itunes.apple.com/gb/app/echo-alerts/id966915444?mt=8'),
            (16, 'iOS', 'Telstra\r\n', '1', 'https://itunes.apple.com/us/app/telstra-on-the-go/id980570991?mt=8'),
            (17, 'iOS', 'ATPI\r\n', '3.1', 'https://itunes.apple.com/us/app/atpi-on-the-go-travel-app/id509986364?mt=8'),
            (18, 'iOS', 'ATPI ON THE GO AMERICA\r\n', '1.1', ' https://itunes.apple.com/us/app/atpi-on-the-go-americas/id955843095?mt=8'),
            (19, 'android', 'Weigh Forward\r\n', '1', ' https://play.google.com/store/apps/details?id=com.vl.rediclinic&hl=en'),
            (20, 'android', 'ATPI on the go\r\n', '3.1', 'https://play.google.com/store/apps/details?id=com.vl.atpi&hl=en'),
            (21, 'android', 'Diettogo\r\n', '1.1', 'https://play.google.com/store/apps/details?id=com.vl.diettogo&hl=en'),
            (22, 'android', 'Telstra\r\n', '1.1', 'https://play.google.com/store/apps/details?id=com.vl.telstra'),
            (23, 'android', 'Astro Awani', '1.2.5', 'https://play.google.com/store/apps/details?id=my.com.astro.awani&hl=en'),
            (24, 'android', 'doTERRA', '1.1', ' https://play.google.com/store/apps/details?id=com.vl.infotrax.doterra'),
            (25, 'android', 'doTERRA Korea (Visisble for Korea Users)', '1', 'https://play.google.com/store/apps/details?id=com.vl.infotrax.doterrakorea'),
            (26, 'android', 'doTERRA Japan (Visisble only for Japan Users)', '1', 'https://play.google.com/store/apps/details?id=com.vl.infotrax.doterrajapan.'),
            (27, 'android', 'Hand and Stone Mobile\r\n', '1', 'https://play.google.com/store/apps/details?id=com.vl.handandstone')
            ");
    }
    private function alterTablesForNiti()
    {
            $this->addSql("ALTER TABLE `clients` CHANGE  `c_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE c_name clientname VARCHAR(100) NOT NULL,CHANGE c_status status tinyint(1) NOT NULL");
            $this->addSql("ALTER TABLE `department` CHANGE  `dept_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE dept_name name VARCHAR(250) NOT NULL");
            $this->addSql("ALTER TABLE `department` ADD status tinyint(1) DEFAULT '1' NOT NULL");
            $this->addSql("ALTER TABLE `designation` CHANGE  `designation_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE designation name VARCHAR(100) NOT NULL");
            $this->addSql("ALTER TABLE `phases` CHANGE  `phase_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE phase_name name VARCHAR(100) NOT NULL");
            $this->addSql("ALTER TABLE `platforms` CHANGE  `pf_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE pf_name platformname VARCHAR(100) NOT NULL,CHANGE pf_status status tinyint(1) NOT NULL");
            $this->addSql("ALTER TABLE `project` CHANGE  `create_date` `create_date` DATETIME NOT NULL,CHANGE start_date 	start_date DATETIME DEFAULT NULL,CHANGE end_date end_date DATETIME NULL");
            $this->addSql("ALTER TABLE `project_names` CHANGE  `p_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE proj_name name VARCHAR(100) NOT NULL,CHANGE proj_status status tinyint(1) NOT NULL");
            $this->addSql("ALTER TABLE user_roles RENAME role");
            $this->addSql("ALTER TABLE `role` CHANGE  `role_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE role_name name VARCHAR(100) NOT NULL,CHANGE role_status status tinyint(1) NOT NULL");
            $this->addSql("ALTER TABLE teams RENAME team");
            $this->addSql("ALTER TABLE `team` CHANGE  `t_id` `id` INT(11) NOT NULL AUTO_INCREMENT,CHANGE t_name name VARCHAR(100) NOT NULL,CHANGE t_status status tinyint(1) NOT NULL");
            $this->addSql("ALTER TABLE `users` CHANGE  `emp_id` `emp_id` VARCHAR(7) NOT NULL,CHANGE role role_id INT(11) DEFAULT '1' NOT NULL,CHANGE type type_id INT(11) DEFAULT NULL,CHANGE objective user_personal_profile_id INT(11) DEFAULT NULL,CHANGE date_reporting_to_jyo user_work_profile_id INT(11) DEFAULT NULL");
            $this->addSql("ALTER TABLE `user_personal_profile` ADD user_id INT(11) NOT NULL");
            $this->insertDataIntoUserPersonalProfile();
            $this->addSql("ALTER TABLE `user_work_profile` CHANGE email user_id INT(11) NOT NULL");
            $this->insertDataIntoUserWorkProfile();
    }

    private function updateWorkProfile()
    {
        //$this->addSql("UPDATE user_work_profile SET department_id=NULL WHERE department_id=0");
        $this->addSql("UPDATE user_work_profile SET designation_id=null WHERE designation_id=0");
        $this->addSql("UPDATE user_work_profile SET band_id=NULL WHERE band_id=0");
        $this->addSql("UPDATE user_work_profile SET team_id=NULL WHERE team_id=0");
    }

    private function insertDataIntoActivity()
    {
        $this->addSql("INSERT INTO `activity` (`id`, `name`, `status`) VALUES
        (1, 'development', 1),
        (2, 'design', 1),
        (3, 'documentation', 1),
        (4, 'meetings', 1),
        (5, 'testing', 1),
        (6, 'training', 1)");

    }

    private function insertDataIntoBand()
    {
        $this->addSql("INSERT INTO `band` (`id`, `name`, `status`) VALUES
            (1, 'A1', 1),
            (2, 'A2', 1),
            (3, 'A3', 1),
            (4, 'B1', 1),
            (5, 'B2', 1),
            (6, 'B3', 1),
            (7, 'C1', 1),
            (8, 'C2', 1),
            (9, 'C3', 1)");

    }

    private function insertDataIntoMenus()
    {
        $this->addSql("INSERT INTO `menus` (`id`, `name`, `status`) VALUES
            (1, 'dashboard', 1),
            (2, 'daily status report', 1),
            (3, 'profile', 1),
            (4, 'add category', 1),
            (5, 'add products', 1),
            (6, 'take asset', 1),
            (7, 'users', 1),
            (8, 'users-reporters', 1),
            (9, 'projects', 1),
            (10, 'teams', 1)");

    }

    private function insertDataIntoSkill()
    {
        $this->addSql("INSERT INTO `skill` (`id`, `name`, `status`) VALUES
            (1, 'php', 1),
            (2, 'mysql', 1),
            (3, 'java', 1),
            (4, 'javascript', 1)");

    }
     
    private function insertDataIntoUserPersonalProfile()
    {
        $this->addSql("INSERT INTO user_personal_profile (name,employee_id,dob,doj,mobile,photo,email, user_id)
        (select username,emp_id,dob,doj,mobile_no,image,email,id from users)");
    }
    
    private function insertDataIntoUserWorkProfile()
    {
        $this->addSql("INSERT INTO user_work_profile (department_id,designation_id,band_id,highest_education,passedout_year,total_experience,doj,work_station,system_ip,system_id,asset_tag,gtalk_id,skype_id,team_id, user_id)
        (select dept_id,designation_id,band_id,highest_education,passedout_year,total_workexp,doj,work_station,system_ip,system_id,asset_tag,gtalk_id,skype_id,team,id from users)"); 
    }

}
