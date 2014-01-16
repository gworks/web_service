<?php
// config.php

//Smartyルートドキュメント位置を決定
define("SITE_URL", dirname(__FILE__)."/");

if($this_dir."/" === SITE_URL){ //requireしたファイルのディレクトリ名と比較
	$current_dir = "";

} else {
	$current_dir = str_replace(SITE_URL."/", "", $this_dir)."/";
}
define("CURRENT_DIR", $current_dir);

var_dump(SITE_URL);

define('DSN', 'Mysql:host=localhost;dbname=webservice_db');
define('DB_USER', 'webservice_user');
define('DB_PASSWORD', 'DNxDfdEj5raVDYGV');
define('PASSWORD_KEY', 'agt;rifdoh;99');

//define('SITE_URL', 'http://dev.at-first.net/web_service/');


error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/web_service/');