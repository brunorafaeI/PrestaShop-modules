<?php
if (!defined('_PS_VERSION_'))
	exit;
function upgrade_module_2_0($object) 
{
	$upgrade_version = '2.0';
	$object->upgrade_detail[$upgrade_version] = array();

	Configuration::updateValue('PAYU_LATAM', $upgrade_version);

	return Db::getInstance()->execute(
		'DROP TABLE IF EXISTS `'._DB_PREFIX_.'payu_token`;');
}

?>
