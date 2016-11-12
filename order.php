<script language="javascript">
function test()
{
 document.write("<?php img(); ?>");
}
</script>

<?php
session_start();
include("check.php");
function img()
{
  if(isset($_GET['v1']))
   {
	   $_SESSION['cart']=$_GET['v1'];
	   $p=$_SESSION['cart'];
	   return $_SESSION['cart'];
   }   
}
?>

<html>
<head>
<title>Order</title>
</head>

<body background="images/jkl.png">
<table width=100%  cellspacing="0" padding:0; >

<tr><td height=100>
<font style="color:red" size="5">
<h1 align="center"><b><u>GALORE &nbspGIFT &nbspGALLERY </u></b></h1>
</font>
</td></tr>

<tr><td>
<table cellspacing="60">
<tr ><td>
<img  style="margin-top:3%;margin-bottom:1%;height:300px;"	src="<?php echo img(); ?>">
</td>

<td><br>
<h4 align="center">Product Category: FLOWERS</h4><br>
<h4 align="center">Product Id: 100011</h4><br>
<h4 align="center">Product Title: ROSES</h4><br>
<h4 align="center">Product Price: $100</h4><br>
</td></tr>
</table>
</td></tr>

<tr><td><hr	width=90%></td></tr>

<tr><td>
<form>
<table width=40% align="center">
<tr><td>
<input type="submit" length="20" value="BUY NOW" name="a1">
</td><td>
<input type="submit" length="20" value="ADD TO CART" name="b1">
</td></tr></table>
</form>
</td></tr>

<tr><td><br></td></tr>

<tr><td height=50 bgcolor="red" align="center">
<font size=5>
<font size=5>
<a href="home.php" style="color:white">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<a href="gallery.php" style="color:white">Gallery</a>
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