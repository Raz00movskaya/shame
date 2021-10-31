<?php
Session_start();
Session_destroy();
header("location:http://coursesite/index.php?");
?>