<?php
/* Module  Unyscape_Decimalfactor
*  Function  The paid total sum should be multiplied by the decimal factor & Values and order IDs are logged in a database table 
*  Author    Prerna
*/
class Unyscape_Decimalfactor_Model_Observer 
{
    public function storeOrderValue(Varien_Event_Observer $observer)
    {
		
		$mod_enabled = Mage::getStoreConfig('decimalfactor_options/settings/mod_enabled');
		
		if($mod_enabled){
		
			$decimal_value = Mage::getStoreConfig('decimalfactor_options/settings/mod_input1');
					
			$invoice = $observer->getEvent()->getInvoice();
			
			$orderno = $invoice->getOrder()->getIncrementId();
			
			$grandtotal = $invoice->getGrandTotal();
			
			$function_on = Mage::getStoreConfig('decimalfactor_options/settings/mod_input2');
			
			$total_sum = ($function_on == 1) ? ($grandtotal * $decimal_value) : $grandtotal;			
			
			try {

			$resource = Mage::getSingleton('core/resource');

			$writeConnection = $resource->getConnection('core_write');

			$query = "INSERT INTO decimalfactor (`order_id`,`grandtotal`,`created_time`) VALUES ('$orderno', '$total_sum',now())";

			$writeConnection->query($query);
			
			} 
			catch (Exception $e) {
				Mage::log($e->getMessage());
			}
		
		}
		else
		{
			Mage::log('Decimal Factor Module is Disabled', null, 'custom.log');
		}
    }
}
