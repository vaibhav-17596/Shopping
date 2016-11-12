<html>
<head>
<title>Insert Product</title>
</head>

<body bgcolor="aqua" background="images/cb.jpg">
<table width=100% borderwidth=0 cellspacing=0>

<tr><td  height=150>
<font style="color:white" size="6">
<h1 align="center"><b><u>GALORE &nbspGIFT &nbspGALLERY</u></b></h1>
</font>
</td></tr>

<tr><td><br></td></tr>
<tr><td>
<form method="post">
<table width=40% align="center" bgcolor="aqua">
<tr><td><br></td></tr>

<tr><td align="center"><font color="blue" size="4"><u>PRODUCT CATEGORY</u></font></td>
<td><input type="textbox" size=25 name="t1" placeholder="ENTER PRODUCT CATEGORY"></td></tr>
<tr><td><br></td></tr>

<tr><td align="center"><font color="blue" size="4"><u>PRODUCT ID</u></font></td>
<td><input type="textbox" size=25 name="t2" placeholder="ENTER PRODUCT ID"></td></tr>
<tr><td><br></td></tr>
<tr><td align="center"><font color="blue" size="4"><u>PRODUCT TITLE</u></font></td>
<td><input type="textbox" size=25 name="t3" placeholder="ENTER PRODUCT TITLE"></td></tr>
<tr><td><br></td></tr>
<tr><td align="center"><font color="blue" size="4"><u>PRODUCT PRICE</u></font></td>
<td><input type="textbox" size=25 name="t4" placeholder="ENTER PRODUCT PRICE"></td></tr>
<tr><td><br></td></tr>
<tr><td align="center"><font color="blue" size="4"><u>PRODUCT IMAGE</u></font></td>
<td><input type="textbox" size=25 name="t3" placeholder="UPLOAD PRODUCT IMAGE"></td></tr>
<tr><td><br></td></tr>
<tr><td align="center"><input type="submit" value="INSERT" name="s1"></td>
<td align="center"><input type="button" value="GO BACK" name="s2"></td></tr>
<tr><td><br></td></tr>
</font>
</table>
</form>
</td></tr>

<tr><td><br><br><br><br></td></tr>

<tr><td height=50 align="center" bgcolor="purple">
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
{
  include("con1.php");
  if(!$con)
  {
	  echo "<br>CONNECTION ERROR<br>".mysql_error();
  }
 
  else
  {
	  $cat=$_POST['t1'];
	  $id=$_POST['t2'];
	  $title=$_POST['t3'];
	  $cost=$_POST['t4'];
	  
	  if(!empty($cat)&& !empty($id)&& !empty($title)&& !empty($cost))
	  {
		  $q=mysql_query("insert into shop.products values('$prod_cat','$prod_id','$prod_title','$prod_price','$prod_image')");
	      if($q>=1)
	  }
  }

?>