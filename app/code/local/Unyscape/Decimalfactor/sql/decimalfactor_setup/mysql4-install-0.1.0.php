<?php
/**
 * Custom Module
 * @category   Decimalfactor
 * @package    Unyscape_Decimalfactor
 * @author  Prerna
 */
$installer = $this;

$installer->startSetup();
/**
* installer query to setup database table at the time of module installation
*/
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('decimalfactor')};
CREATE TABLE {$this->getTable('decimalfactor')} (
  `decimalfactor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) DEFAULT NULL,
  `grandtotal` decimal(12,2) DEFAULT NULL,
  `created_time` DATETIME NULL,  
  PRIMARY KEY (`decimalfactor_id`)
) 
");
$installer->endSetup();



	 
