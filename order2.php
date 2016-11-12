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
<?php
include("con1.php");
if($con)
{
	//$pic=$_GET['v1'];
	$pic=$_SESSION['cart'];
	$q=mysql_query("select * from shop.products where prod_image=".$pic);
	echo "<table border=0 cellpadding=10 align='center' bgcolor='lightcoral'>";
	$row= mysql_fetch_row($q);
	while($row)
	{
		echo '<tr><td align="center" style="color:red"><b><u>PRODUCT CATEGORY</u></b></td><td>'.$row[0].
		     '<td align="center" style="color:red"><b><u>PRODUCT ID</u></b></td><td>'.$row[1].
         	 '<td align="center" style="color:red"><b><u>PRODUCT TITLE</u></b></td><td>'.$row[2].
			 '<td align="center" style="color:red"><b><u>Product PRICE</u></b></td><td>'.$row[3].'</td></tr>';
		echo '</table>';
	}
}
else
	{
		die("CONNECTION ERROR".mysql_error());
	}
	mysql_close($con);
?>
</td>
</tr>
</table>
</td></tr>

<tr><td><hr	width=100%></td></tr>

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