<?php
//info.php
if($_SERVER['HTTPS']=="on"){$pro = "https://";}else{$pro = "http://";}
$URL = $pro.$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];

echo $URL;

phpinfo();
