<?php
session_start();
session_destroy();
$_SESSION['uname']=array();
$_SESSION['pname']=array();
echo "<script language='javascript'>alert('LOGGED OUT SUCCESSFULLY');</script>";
header("location: home.php");
?>