<?php
session_start();
?>
<html>
<head>
<title>Personal Details</title>
</head>

<body bgcolor="aqua" background="images/vvv.gif">

<table width=100% borderwidth=0 cellspacing="0">

<tr><td  height=150>
<font style="color:white" size="6">
<h1 align="center"><b><u>GALORE &nbspGIFT &nbspGALLERY</u></b></h1>
</font>
</td></tr>

<tr><td>
<font style="color:white" size="6"><h2 align="center">USER DETAILS</h2>
</font></td></tr>
<tr><td><br><br></td></tr>
<tr><td>
<form name="f3" method="get">

<table width=80% align="center" cellpadding=20>

<tr><td><font color="white" size="6"><u>USER NAME</u></font></td>
<td><input type="textbox" size=35 maxlength=8 name="t1" placeholder=" Enter UserName Here"></td></tr>

<tr><td><font color="white" size="6"><u>EMAIL ID</u></font></td>
<td><input type="email" size=35 name="e1" placeholder=" Enter Your Email ID"></td></tr>

<tr><td><font color="white" size="6"><u>CONTACT NO</u></font></td>
<td><input type="textbox" size=35 name="c1" placeholder=" Enter 10-digits Mobile No."></td></tr>

<tr><td><font color="white" size="6"><u>PRODUCT ID</u></font></td>
<td><input type="textbox" size=35 name="p1" placeholder=" Enter Product ID"></td></tr>

<tr><td><font color="white" size="6"><u>ADDRESS</u></font></td>
<td><input type="textarea" size=35 name="a1" placeholder=" Enter Your Complete Address"></td></tr>

<br><br><br>
<tr><td align="center">
<input type="submit" value="PLACE ORDER" name="s1"></td>
<td>
<input type="RESET" value="RESET"></td></tr>

</table>
</form>
</td></tr>

<tr><td><br><br><br><br><br></td></tr>

<tr><td height=50 bgcolor="navy" align="center">
<font size=5>
<a href="home.php" style="color:white">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="contact.php" style="color:white">Contact Us</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="about.php" style="color:white">About Us</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="login.php" style="color:white">Order</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="terms.php" style="color:white">Terms & Conditions</a>
</font>
</td></tr>
</table>
</body>
</html>


<?php
if(isset($_GET['s1']))
{ include("con1.php");
  if(!$con)
  {
	  echo "<br>CONNECTION ERROR<br>".mysql_error();
  }
  else
  { 
	$usernm=$_GET['t1'];
	$email=$_GET['e1'];
	$phone=$_GET['c1'];
	$id=$_GET['p1'];
	$add=$_GET['a1'];
	$stats="pending";
	if(!empty($usernm) && !empty($email) && !empty($phone)&& !empty($id) && !empty($add))
	{
		 $q=mysql_query("insert into shop.orders values('$usernm','$email','$phone','$id','$add','','$stats')");
	      echo $q;
		  if($q)
	     {
		  
		  header("location:success.php");
	     }
		
	}
	else
	 {   
       echo "<script language='javascript'>alert('PLEASE FILL THE REQUIRED DETAILS');</script>";
	 }
  }
}

?>