<?php
//Smartyルートドキュメント位置を決定
$this_dir = dirname(__FILE__);
require_once("../setup.php");


$smarty = new Smarty_webService();

$smarty->assign('name','Ned');

$smarty->display('index.tpl');

