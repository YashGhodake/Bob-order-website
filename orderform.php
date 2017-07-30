<!doctype html>
<?php //include('header.inc'); ?>

<html>
<?php
	
	$pictures = array('tire.jpg','oil.jpg','spark.jpg','tire1.jpg','oil1.jpg','spark1.jpg',
						'engine.jpg','fly.jpg','2.jpg','disk.jpg','door.jpg','gear.jpg');
	shuffle($pictures);
?>
<head>

<title>Bob's Auto Parts</title>
</head>

<body>
<body bgcolor="skyblue">
<center>
	<h1>Bob's Auto Parts</h1>
	<table width='100%'>
	<tr>
	<?php
		for($i=0;$i<4;$i++)
		{
			echo '<td align="center"><img src="';
			echo $pictures[$i];
			echo '" width="150" height="150"></td>';
		}
	?>
	</center>
<form action="processorder.php" method = "post" >
<table border = "1" bgcolor="white">
<tr bgcolor="#cccccc">
<td width = "150">Item</td>
<td width="280">Quantity</td>
</tr>
<tr>
<td>Tires</td>
<td align="left">
<input type="text" name="tireqty" size="3"
	maxlength="3"/>
	</td>
</tr>
<tr>
<td>Oil</td>
<td align="left">
<input type="text" name="oilqty" size="3"
	maxlength="3"/>
	</td>
</tr>
<tr>
<td>Spark Plugs</td>
<td align="left">
<input type="text" name="sparkqty" size="3"
	maxlength="3"/>
	</td>
</tr>
<tr>
<td>Your name</td>
<td align="left">
<input type="text" name="name" size="40"
	maxlength="20"/>
	</td>
</tr>
<tr>
<td>Shipping address:</td>
<td align  = "left">
<input type = "text" name="address" size="40">
</td>
</tr>
<tr>
<td>Pincode:</td>
<td><select name="find">
	<option value = "a">1111</option>
	<option value = "b">2222</option>
	<option value = "c">3333</option>
	<option value = "d">4444</option>
	</select>
	</td>
</tr>
<tr>
<td colspan="2" align="left">
<input type="submit" value="Submit Order"/>
</td>
</tr>

</form>

<form action = "frighttable.php" method = "post">

<tr>
	<td align="left">
		<input type="submit" value="View Fright Table"/>
	</td>


</form>

<form action = "vieworders.php" method = "post">
	<td align="center">
	<input type="submit" value="View Orders"/>
	</td>
</form>

<form action = "feedbackform.php" method="post">

	<td align = "right">
		<input type = "Submit" value="Feedback Form"/>
	</td>
</tr>
</table>
</form>

	<?php
		//require('footer.inc');
	?>
</body>
</html>
