<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'galaksim_spad141';
$sitepad['db_user'] = 'galaksim_spad141';
$sitepad['db_pass'] = '!wP0x!x!6V';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'sMzTbJ7_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'galaksimiz.com';// URL without protocol but with directory as well
$sitepad['url'] = 'https://galaksimiz.com';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/home/galaksim';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'myfNrikwy5L3SufjgiG2UTsMPo6NBHJIeneUYvuSjOWSEb7GO8WeYo1c8j5Vbd49';
$sitepad['SECURE_AUTH_KEY'] = 'JHo8JGD3sB5xsktjmhEJABxakWiTxSvxqYTmz0gEE0jEgdytKI2RA0XGsrIlXdfc';
$sitepad['LOGGED_IN_KEY'] = 'zTLwQ3tSHbMaCpYkou1FgiUm7jaSuESxxSiE9OnaJxe8H0QpFvxTz22TWQGxSLLZ';
$sitepad['NONCE_KEY'] = 'nHnYvb87YPzT6uHOJYIoOGilTLEg2YRXOzoCXUUJq5NlSKEcPIig47600ORlx3cI';
$sitepad['AUTH_SALT'] = 'Q1GqGaA9ieev2132uQVKuRNHd9H7IPi6CQcDs28xKIZlVC4WrIC8hwaNh4W1wN7d';
$sitepad['SECURE_AUTH_SALT'] = 'FCVn0ZrTEWFf7nNx5qfLU2d2xa3jYMgSmgieLZrNcXggdWkFT0SDm02Jb4X4GDg9';
$sitepad['LOGGED_IN_SALT'] = 'ypniveYRH9xg5MWCmZ3JJGwAPjfbIZsZr9fv9G8t2W9OtnRmrvvJ9OKBdo2iiVgn';
$sitepad['NONCE_SALT'] = '3OBjkPTEHGfKRYoonLLo1fHz4nrjVJ9HWsJXzrFrMzs2UybyxVuui6I5c9UprD2J';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

