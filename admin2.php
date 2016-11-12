<html>
<head><title>Admin</title>
</head>

<body background='images/cb.jpg'>
<table width=100%  cellspacing='0' align="center">

<tr><td height=100>
<font style='color:#E8DAEF' size='6' bgcolor='purple'>
<h1 align="center"><b><u>GALORE &nbspGIFT &nbspGALLERY </u></b></h1>
</font>
</td></tr>
<tr><td><br><br></td></tr>

<tr><td align="center"><font color="purple" size='8'><u>ADD PRODUCT DETAILS</u></font></td></tr>

<tr><td>
<form name="f3" method="post">
<table width=80% align="center" cellpadding=20>

<tr><td><font color="purple" size="6">PRODUCT CATEGORY</font></td>
<td><input type="textbox" size=35 name="t1" placeholder=" Enter Product Category" required></td></tr>

<tr><td><font color="purple" size="6">PRODUCT ID</font></td>
<td><input type="textbox" size=35 maxlength=6 name="t2" placeholder=" Enter Product ID" required></td></tr>

<tr><td><font color="white" size="6">PRODUCT TITLE</font></td>
<td><input type="textbox" size=35 name="t3" placeholder=" Enter Product Title" required></td></tr>

<tr><td><font color="white" size="6">PRODUCT PRICE</font></td>
<td><input type="textbox" size=35 name="t4" placeholder=" Enter Product Price" required></td></tr>

<tr><td><font color="white" size="6">PRODUCT IMAGE</font></td>
<td><input type="file" name="t5" placeholder=" Enter Product Image" required></td></tr>

<tr><td><br><br><br></td></tr>
<tr><td align="center">
<input type="submit" value="ADD PRODUCT" name="s1"></td>

<td><input type="RESET" value="RESET"></td></tr>
</table>
</form>
</td></tr>

<tr><td><br><br><br><br><br></td></tr>

</table>
</body>
</html>

<?php

{
	session_start();
	include("con1.php");
	if(!$con)
  {
	  echo "<br>CONNECTION ERROR<br>".mysql_error();
  }
  else
  { 
    $category=$_POST['t1'];
    $id=$_POST['t2'];
	$title=$_POST['t3'];
	$price=$_POST['t4'];
	$image=$_POST['t5'];
	if(!empty($category)&& !empty($id)&& !empty($title) && !empty($price)&& !empty($image))
	{
		{ $q=mysql_query("insert into shop.products values('$category','$id','$title','$price','$image')");
	      if($q>=1)
	     {
		  echo "success";
		  header("location: admin1.php");
	     }
		}
		
	}
	else
	 {   
       echo "<script language='javascript'>alert('PLEASE FILL THE REQUIRED DETAILS');</script>";
	 }
  }
	mysql_close($con);
}
?>