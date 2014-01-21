<?php
session_start();
$_SESSION["zzzz"] = "AAAA";
echo $_SESSION["zzzz"].'<br />';
echo $_SESSION["xxxx"].'<br />';
echo 'page1<br />';
echo '<a href="./page2.php">next</a>';
?>