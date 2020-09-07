<?php
session_start();
//echo $_SESSION['username'];
echo $_GET['username1'];
$_SESSION=$_GET['username1'];

?>