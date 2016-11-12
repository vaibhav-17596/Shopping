<?php
session_start();
?>


<html>
<head><title>Success Page</title>
</head>

<body background="images/cb.jpg">
<table width=100%  cellspacing="0" padding:0; >

<tr><td height=100>
<font  size="6">
<h1 align="center" style="color:#E8DAEF"><b><u>GALORE &nbspGIFT &nbspGALLERY</u></b></h1>
</font>
</td></tr>

<tr><td><br><br><br><br></td></tr>
<tr><td>
<font size="6"><h1 align="center">THANK YOU FOR SHOPPING.. !!!</h1></font>
</td></tr>
<tr><td><br><br></td></tr>
<tr><td>
<font size="5"><h3 align="center">YOUR ORDER HAS BEEN SUCCESSFULLY PLACED</h3></font>
</td></tr>

<tr><td><br>
<center>
<form>
<input type="submit" value="LOGOUT" name="s1">
</form>
</center>
<br><br><br><br><br><br><br></td></tr>
<tr><td height=40 bgcolor="purple" align="center">
<font size=5>
<a href="gallery.php" style="color:white">Gallery</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="contact.php" style="color:white">Contact Us</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="about.php" style="color:white">About Us</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="terms.php" style="color:white">Terms & Conditions</a>
</font>
</td></tr>
</table>
</body>
</html>
<?php
if(isset($_GET['s1']))
{
	header("location:logout.php");
}
?>