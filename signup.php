<html>
<head>
<title>SignUp</title>
</head>

<body bgcolor="aqua" background="images/cb.jpg">
<table width=100% borderwidth=0 cellspacing=0>

<tr><td  height=150>
<font style="color:white" size="6">
<h1 align="center"><b><u>GALORE &nbspGIFT &nbspGALLERY</u></b></h1>
</font>
</td></tr>

<tr><td><br><br><br></td></tr>
<tr><td>
<form name="f3" method="post">
<table width=80% align="center" cellpadding=20>

<tr><td><font color="purple" size="6">FULL NAME</font></td>
<td><input type="textbox" size=35 name="t1" placeholder=" Enter Your Full Name Here" required></td></tr>

<tr><td><font color="purple" size="6">USER NAME(Max. 8 characters)</font></td>
<td><input type="textbox" size=35 maxlength=8 name="t2" placeholder=" Enter your UserName Here" required></td></tr>

<tr><td><font color="white" size="6">EMAIL ID</font></td>
<td><input type="email" size=35 name="e1" placeholder=" Enter Your Email ID Here" required></td></tr>

<tr><td><font color="white" size="6">CONTACT NO</font></td>
<td><input type="textbox" size=35 name="c1" placeholder=" Enter Your 10-digits Mobile No. Here" required></td></tr>

<tr><td><font color="white" size="6">CREATE PASSWORD</font></td>
<td><input type="password" size=35 name="p1" placeholder=" Enter Your Password Here" required></td></tr>

<tr><td><font color="white" size="6">CONFIRM PASSWORD</font></td>
<td><input type="password" size=35 name="p2" placeholder=" Re-Enter Your Password Here" required></td></tr>

<tr><td><br><br><br></td></tr>
<tr><td align="center">
<input type="submit" value="SAVE DETAILS" name="s1"></td>

<td><input type="RESET" value="RESET"></td></tr>
</table>
</form>
</td></tr>

<tr><td><br><br><br><br><br></td></tr>

<tr><td height=50 bgcolor="purple" align="center">
<font size=5>
<a href="home.php" style="color:white">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="gallery.php" style="color:white">Gallery</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="contact.php" style="color:white">Contact Us</a>
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
if(isset($_POST['s1']))
{ include("con1.php");
  if(!$con)
  {
	  echo "<br>CONNECTION ERROR<br>".mysql_error();
  }
  else
  { $name=$_POST['t1'];
    $usernm=$_POST['t2'];
	$email=$_POST['e1'];
	$phone=$_POST['c1'];
	$passwd=$_POST['p1'];
	$passwd1=$_POST['p2'];
	if(!empty($name)&& !empty($usernm)&& !empty($email) && !empty($phone)&& !empty($passwd))
	{
		if($passwd==$passwd1)
		{ $q=mysql_query("insert into shop.data values('$name','$usernm','$email','$phone','$passwd')");
	      if($q>=1)
	     {
		  echo "success";
		  header("location: login.php");
	     }
		}
		
		else
		{
			echo "<script language='javascript'>alert('PASSWORD DOESNT MATCH');</script>";
		}
	}
	else
	 {   
       echo "<script language='javascript'>alert('PLEASE FILL THE REQUIRED DETAILS');</script>";
	 }
  }
}

/*function addup()
{
	header("location: login.php");
}*/
?>

<script language="javascript">
function add()
{
	document.write("<?php addup(); ?>")
}
</script>