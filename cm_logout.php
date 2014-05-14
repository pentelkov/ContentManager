<?php
session_start();
$_SESSION['name']="";
$_SESSION['logged']=false;
header('Location: /cm_login.php');
exit;
?>