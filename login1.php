<html>
<head>
<title>Login Page</title>
</head>

<body background="images/cb.jpg">
<table width=100% borderwidth=0 cellspacing=0>

<tr><td  height=150>
<font style="color:white" size="6">
<h1 align="center"><b><u>GALORE &nbspGIFT &nbspGALLERY</u></b></h1>
</font>
</td></tr>

<tr><td>
<table   align="center" width=40%>
<tr><td align="center">
<font size=4>
<h1 style="color:aqua"><u>ADMIN &nbspLOGIN</u></h1>
</font>
</td></tr>

<tr><td><br>
<form name="f1" method="post">

<font size=6 style="color:#4A235A  ">
<center><b>
USERNAME&nbsp&nbsp&nbsp&nbsp<input type="textbox" size=25 name="t1" placeholder=" Enter Username" required>
<br><br><br>

PASSWORD&nbsp&nbsp&nbsp&nbsp<input type="password" size=25 name="t2" placeholder=" Enter Password" required>
<br><br><br>

<input type="submit" value="LOGIN" name="s1">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" value="RESET">
<br><br><br>
<a href="signup.php">CREATE YOUR ACCOUNT</a>
</b></center>
</font>
</form>
</td></tr>
</table>
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
{ session_start();
  include("con1.php");
  if(!$con)
  {
	  echo "<br>CONNECTION ERROR<br>".mysql_error();
  }
 
  else
  {
	$us=$_POST['t1'];
    $pw=$_POST['t2'];
	
    setcookie("uname",$us);
	setcookie("pname",$pw);
	
	$_SESSION['user']=$us;
    $_SESSION['pass']=$pw;
    if(!empty($us)&& !empty($pw))
	
	{
		$query=mysql_query("select * from shop.data where username='$us'");
		$res=mysql_fetch_row($query);
		
		if($res>0)
		{	
		  if(($_SESSION['user']==$res[1]) && ($_SESSION['pass']==$res[4]))
		  { 
	        echo "Your account has been successfully logged in";
			header("location: adminarea.php");
		  }
          else
		  {
			  echo "<script language='javascript'>alert('INCORRECT PASSWORD');</script>";
		  }			  
		}
		else
		{
			echo "<script language='javascript'>alert('USER NOT FOUND');</script>";
		}
		
	}
    else
	{
		echo "<script language='javascript'>alert('PLEASE ENTER SOME DATA FIRST');</script>";
	}		
  }
}

?>