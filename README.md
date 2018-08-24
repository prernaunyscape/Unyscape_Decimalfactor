# Unyscape_Decimalfactor
Magento Work Sample
=
* The paid total sum should be multiplied by the decimal factor
* Values and order IDs are logged in a database table
* Admin page to enable and disable the function
* Admin page to set the decimal factor

This module will store the updated value with order number in a custom table named "decimalfactor".

Database Structure

Tablename : decimalfactor
Columnnames :
decimalfactor_id - Autoincrement ID 
order_id - Order Number (Fully Paid)
grandtotal - Calculative amount (multiplied with decimal value configured from the backend)
created_time - Current timestamp

Admin Configuration 

Goto System > Configuration > MULTIPLY DECIMAL FACTOR > Configuration Settings and update the settings.
Settings Described as below.
Module Enable - Switch ON/OFF extension module 
Decimal Factor Value - Enter any number (whole or decimal) which will be used to multiply with the grand total.
Function Enable - Switch ON/OFF the multiplication of the factor with the Order Value. If its switched OFF original grand total value will be saved or else the calculative value will get saved.

