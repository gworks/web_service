<?php
// config.php

//Smartyルートドキュメント位置を決定
define("SERVICE_DOC_ROOT", dirname(__FILE__)."/");

if($this_dir."/" === SERVICE_DOC_ROOT){ //requireしたファイルのディレクトリ名と比較
	$current_dir = "";
} else {
	$current_dir = str_replace(SERVICE_DOC_ROOT, "", $this_dir)."/";
}
define("CURRENT_DIR", $current_dir);

//var_dump(SERVICE_DOC_ROOT);
//var_dump(CURRENT_DIR);
//var_dump($this_dir);

//ユーザー名                  ：aa153owtf2
//初期パスワード              ：yY66YwKK



define('DSN', 'mysql:host=localhost;dbname=webservice_db');
//define('DB_USER', 'webservice_user');
//define('DB_PASSWORD', 'DNxDfdEj5raVDYGV');
define('DB_USER', 'aa153owtf2');
define('DB_PASSWORD', 'yY66YwKK');
define('PASSWORD_KEY', 'agt;rifdoh;99');

if($_SERVER['HTTPS']=="on"){$pro = "https://";}else{$pro = "http://";}
$URL = $pro.$_SERVER["HTTP_HOST"].str_replace(basename($_SERVER['PHP_SELF']), "", $_SERVER['PHP_SELF']);

//define('SITE_URL', 'http://dev.at-first.net/web_service/');
define('SITE_URL', $URL);
//var_dump(SITE_URL);

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/web_service/');
