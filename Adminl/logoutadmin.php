<?php
session_start();
$_SESSION = array();
if(!isset($_SESSION['usrnam'])) {
    include_once("index.php");
     exit;}
 session_destroy();
?>
