<?php
if(!isset($_COOKIE['umane'])&& !isset($_COOKIE['pname']))
{
	header("location: login.php");
}

if(isset($_POST['s1']))
{ session_start();
  include("con1.php");
    if(!$con)
   {
	  echo "<br>CONNECTION ERROR<br>".mysql_error();
   }
 
   else
   {
	   
   }
} 
?>
<html>
<head>
<title>Cart</title>
</head>

<body background="images/cb.jpg">
<table width=100%  cellspacing="0" padding:0; >

<tr><td height=100>
<font  size="6">
<h1 align="center" style="color:#E8DAEF"><b><u>GALORE &nbspGIFT &nbspGALLERY</u></b></h1>
</font>
</td></tr>

<tr><td><br><br><br><br></td></tr>
<tr><td><div> </div></td></tr>

<tr><td height=50 bgcolor="teal" align="center">
<font size=5>
<a href="home.php" style="color:white">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="contact.php" style="color:white">Contact Us</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="login.php" style="color:white">Order</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="logout.php" style="color:white">Logout</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="terms.php" style="color:white">Terms & Conditions</a>
</font>
</td></tr>
</table>
</body>
</html>

