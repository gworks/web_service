<?php
require_once('config.php');
require_once('functions.php');

//utf-8設定
mb_internal_encoding("utf-8");
mb_http_input("auto");
mb_http_output("utf-8");

// Smartyライブラリを読み込みます
//var_dump(SERVICE_DOC_ROOT);
require_once(SERVICE_DOC_ROOT.'Smarty/libs/Smarty.class.php');

// setup.phpはアプリケーションに必要なライブラリファイルを
// 読み込むのに適した場所です。それをここで行うことができます。例:
// require_once('guestbook/guestbook.lib.php');

class Smarty_webService extends Smarty {

   function __construct()
   {
        // クラスのコンストラクタ。
        // これらは新しいインスタンスで自動的にセットされます。

        parent::__construct();

        $this->template_dir = SERVICE_DOC_ROOT.'templates/'.CURRENT_DIR;
        $this->compile_dir  = SERVICE_DOC_ROOT.'Smarty/templates_c/';
        $this->config_dir   = SERVICE_DOC_ROOT.'Smarty/configs/';
        $this->cache_dir    = SERVICE_DOC_ROOT.'Smarty/cache/';

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Web Sirvice');
   }

}
?>