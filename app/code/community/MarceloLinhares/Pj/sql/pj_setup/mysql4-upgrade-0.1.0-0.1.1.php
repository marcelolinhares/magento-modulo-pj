<?php



$installer = $this;

/* @var $installer Mage_Customer_Model_Entity_Setup */
$installer->startSetup();


// create cnpj attribute
$installer->addAttribute('customer', 'pj_cnpj', array(
    'label'        => 'CNPJ',
    'visible'      => 1,
    'required'     => 0,
    'position'     => 1,
    'input' => 'text'
));


$this->addAttribute('customer_address', 'pj_cnpj', array(
    'type' => 'text',
    'input' => 'text',
    'label' => 'CNPJ',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => 0,
    'visible_on_front' => 1
));



Mage::getSingleton('eav/config')
    ->getAttribute('customer_address', 'pj_cnpj')
    ->setData('used_in_forms', array(
        'customer_register_address',
        'customer_address_edit',
        'adminhtml_customer_address'
    ))->save();



    Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'pj_cnpj')
    ->setData('used_in_forms', array(
        'adminhtml_customer',
        'customer_account_create',
         'customer_account_edit'
    ))->save();




 // create company name attribute
$installer->addAttribute('customer', 'pj_company_name', array(
    'label'        => 'Razão Social',
    'visible'      => 1,
    'required'     => 0,
    'position'     => 1,
    'input' => 'text'
));


$this->addAttribute('customer_address', 'pj_company_name', array(
    'type' => 'text',
    'input' => 'text',
    'label' => 'Razão Social',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => 0,
    'visible_on_front' => 1
));



Mage::getSingleton('eav/config')
    ->getAttribute('customer_address', 'pj_company_name')
    ->setData('used_in_forms', array(
        'customer_register_address',
        'customer_address_edit',
        'adminhtml_customer_address'
    ))->save();



    Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'pj_company_name')
    ->setData('used_in_forms', array(
        'adminhtml_customer',
        'customer_account_create',
         'customer_account_edit'
    ))->save();


$installer->endSetup();