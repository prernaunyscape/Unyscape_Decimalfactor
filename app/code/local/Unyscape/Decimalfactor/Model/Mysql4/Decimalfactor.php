<?php
class Unyscape_Decimalfactor_Model_Mysql4_Decimalfactor extends Mage_Core_Model_Mysql4_Abstract
{
	public function _construct()
	{
		$this->_init('decimalfactor/decimalfactor', 'decimalfactor_id');
	}
}
