<?php
session_start();
?>

<html>
<head><title>Change Status</title>
</head>

<body background='images/cb.jpg'>
<table width=100%  cellspacing='0' align="center">

<tr><td height=100>
<font style='color:white' size='6' bgcolor='purple'>
<h1 align='center'><b><u>GALORE &nbspGIFT &nbspGALLERY </u></b></h1>
</font>
</td></tr>

<tr><td><br><br><br><br><br><br><br></td></tr>

<tr><td>
<form>
<table width="70%" align="center">
<tr><td><font color="white" size="8">PRODUCT ID</font></td>
<td><input type="textbox" size=35 name="a1" placeholder=" Enter UserName Here"></td></tr>
<tr><td><br><br><br></td></tr>
<tr><td><font color="white" size="8">CHANGED STATUS</font></td>
<td><input type="textbox" size=35 name="a2" placeholder=" Update Status Here"></td></tr>

<tr><td><br><br><br></td></tr>
<tr><td align="center">
<input type="submit" value="SAVE" name="s1"></td>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td><input type="submit" value="LOGOUT" name="s2"></td></tr>
</table>
</form>
</td></tr>
</table>
</body>
</html>

<?php
if(isset($_GET['s1']))
 {
	include("con1.php");
	if($con)
	{
		if(!empty($_GET['a1']) && !empty($_GET['a2']))
		{
			 $a= $_GET['a1'];
			 $b= $_GET['a2'];
			 $q=mysql_query("update shop.orders set status='".$b."'where product_id=".$a);
			 if($q)
			 {
				 echo "<script language='javascript'>alert('STATUS UPDATED SUCCESSFULLY');</script>";
			 }
		  else
		  {
			echo "<script language='javascript'>alert('DATA NOT FOUND');</script>";
		  }
		  mysql_close($con);
		}
	}
 }
 if(isset($_GET['s2']))
{
	header("location:logout.php");
}
?>