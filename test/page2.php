<?php
    session_start();
    if($_SESSION["zzzz"] != "AAAA"){
      $_SESSION["xxxx"] = "BBBB";
      header(sprintf("Location: %s", "page1.php"));
    }
    echo 'page2';
    ?>