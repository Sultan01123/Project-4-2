<?php
session_start();
session_unset();
session_destroy();
header("loction:../login.php");
exit();
?>