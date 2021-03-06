<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	$autoload['packages'] = array(APPPATH.'third_party');
	$autoload['libraries'] = array(
		'database',
		'datamapper',
		'pagination',
		'session',
		'common',
		'email',
		'template',
		'form_validation',
		'Padiauth',
	);
	$autoload['helper'] = array('url','form','date','file','directory','text','cookie');
	$autoload['config'] = array();
	$autoload['language'] = array();
	$autoload['model'] = array(array(
		'App_logs/app_log',
		'App_settings/app_setting',
		'Books/book',
		'Marketplaces/marketplace',
		'Users/user',
		'Settings/setting',
	));
