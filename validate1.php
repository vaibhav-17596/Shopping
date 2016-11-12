<?php
if(!isset($_COOKIE['umane'])&& !isset($_COOKIE['pname']))
{
	header("location: login.php");
}
else
{
	header("location: info.php");
}

?>