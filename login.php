<?php
require_once('config.php');
require_once('functions.php');

session_start();

if(!empty($_SESSION['me'])){
	header('Location: ' . SITE_URL);
	exit;
}

require('setup.php');
$smarty = new Smarty_webService();
$smarty->display('login.tpl');

