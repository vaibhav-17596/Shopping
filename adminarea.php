<html>
<head><title>Admin</title>
</head>

<body background='images/cb.jpg'>
<table width=100%  cellspacing='0' align="center">

<tr><td height=100>
<font style='color:#E8DAEF' size='6' bgcolor='purple'>
<h1 align='center'><b><u>GALORE &nbspGIFT &nbspGALLERY </u></b></h1>
</font>
</td></tr>

<?php

{   session_start();
	include("con1.php");
	if($con)
	{
		echo "<table border=0 cellpadding=10 align='center' bgcolor='lightcoral'>";
		echo "<tr><td align='center' style='color:yellow'><b><u>Username</u></b></td>
		      <td align='center' style='color:yellow'><b><u>Email</u></b></td>
			  <td align='center' style='color:yellow'><b><u>Contact No</u></b></td>
			  <td align='center' style='color:yellow'><b><u>Product ID</u></b></td>
			  <td align='center' style='color:yellow'><b><u>Address</u></b></td>
			  <td align='center' style='color:yellow'><b><u>Date of Order</u></b></td>
			  <td align='center' style='color:yellow'><b><u>Status</u></b></td></tr>";
			  
		$query=mysql_query("select * from shop.orders");
		while($row=mysql_fetch_row($query))
		{ echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td></tr>';
		}
		echo '</table>';
	}
	else
	{
		die("CONNECTION ERROR".mysql_error());
	}
	mysql_close($con);
}
?>
<tr><td><br><br></td></tr>
<center>
<form>
<tr><td><input type="submit" value="CHANGE STATUS" name="m1"></td>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td><input type="submit" value="LOGOUT" name="m2"></td></tr>
</form>
</center>
</table>
</body>
</html>

<?php
if(isset($_GET['m1']))
{ header("location:change.php");
}
if(isset($_GET['m2']))
{
	header("location:logout.php");
}
?>