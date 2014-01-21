<?php
$this_dir = dirname(__FILE__);
require_once('setup.php');


//session_start();

if(empty($_SESSION['me'])){
	header('Location: ' . SITE_URL . 'login.php');
	exit;
}


$smarty = new Smarty_webService();
$smarty->display('index.tpl');

