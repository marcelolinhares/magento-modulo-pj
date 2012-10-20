<?php



$installer = $this;

/* @var $installer Mage_Customer_Model_Entity_Setup */
$installer->startSetup();

$installer->addAttribute('customer', 'type_person', array(
    'label'        => 'Tipo de Pessoa',
    'visible'      => 1,
    'required'     => 0,
    'position'     => 1,
    'input' => 'select',    
    'source' => 'pj/source_types'
));


$this->addAttribute('customer_address', 'type_person', array(
    'type' => 'int',
    'input' => 'select',
    'label' => 'Tipo de Pessoa',
    'source' => 'pj/source_types',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => 0,
    'visible_on_front' => 1
));



Mage::getSingleton('eav/config')
    ->getAttribute('customer_address', 'type_person')
    ->setData('used_in_forms', array(
        'customer_register_address',
        'customer_address_edit',
        'adminhtml_customer_address'
    ))->save();



    Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'type_person')
    ->setData('used_in_forms', array(
        'adminhtml_customer',
        'customer_account_create',
         'customer_account_edit'
    ))->save();


$installer->endSetup();