<!doctype html>
<html>
<body>
<table border="0" cellpadding="3">
<tr>
	<td bgcolor="#cccccc" align="center">Distance</td>
	<td bgcolor="#cccccc" align="center">cost</td>
</tr>
<?php
	$distance = 50;
	for($distance=50;$distance<250;$distance += 50)
	{
		echo "<tr>\n <td align = 'right'>$distance</td>\n";
		echo "<td align = 'right'>".$distance/10 ."</td>\n</tr>\n";
	}
?>
</table>
</body>
</html>