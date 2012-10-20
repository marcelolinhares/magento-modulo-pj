<?php



$installer = $this;


    Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'type_person')
    ->setData('used_in_forms', array(
        'adminhtml_customer',
        'customer_account_create',
         'customer_account_edit', 
        'checkout_register'
    ))->save();

$installer->endSetup();