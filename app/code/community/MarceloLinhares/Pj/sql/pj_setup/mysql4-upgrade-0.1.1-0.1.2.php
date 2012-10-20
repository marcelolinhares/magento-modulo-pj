<?php



$installer = $this;

/* @var $installer Mage_Customer_Model_Entity_Setup */
$installer->startSetup();
//Add Column to quote and order table
$this->_conn->addColumn($this->getTable('sales_flat_quote'), 'type_person', 'varchar(100)');
$this->_conn->addColumn($this->getTable('sales_flat_order'), 'type_person', 'varchar(100)');


$installer->endSetup();