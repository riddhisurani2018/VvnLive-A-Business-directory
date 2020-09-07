<?php
session_start();
$_SESSION['username']=$_GET['username'];
header('Location:index.php');
?>