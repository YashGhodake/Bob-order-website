<!doctype html>
<html>
	<head>
			<title>Bob's Auto Parts-Order List</title>
	</head>
	<body>
		<?php include ('header.inc'); ?>
		<h1>Bob's Auto parts</h1>
		<h2>Order List</h2>
		
		<?php
			
		
			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
			$orders = file("$DOCUMENT_ROOT/order.txt");
	
			$number_of_orders = count($orders);
			if($number_of_orders == 0)
			{
				echo '<p><strong>No Orders Are Pendeing.
				Please try again later!</strong></p>';
			}
			/*for ($i=0;$i<$number_of_orders;$i++)
			{
				echo "<p>".$orders[$i].'<br />';
			}*/
			
			echo "<table border='1' >\n";
			echo '<tr><th bgcolor="#ccccff" >Order Date</th>
				  <th bgcolor="#ccccff" >Tires</th>
				  <th bgcolor="#ccccff">Oil</th>
				  <th bgcolor="#ccccff">Spark Plugs</th>
				  <th bgcolor="#ccccff">Total</th>
				  <th bgcolor="#ccccff">Address</th>
				  </tr>';
			for($i=0;$i<$number_of_orders;$i++)
			{
				
				$line = explode("\t",$orders[$i]);
				
				$line[1]=intval($line[1]);
				$line[2]=intval($line[2]);
				$line[3]=intval($line[3]);
				
				echo "<tr><td>$line[0]</td>
						   <td align = 'right'>$line[1]</td>
						   <td align = 'right'>$line[2]</td>
						   <td align = 'right'>$line[3]</td>
						   <td align = 'right'>$line[4]</td>
						   <td>$line[5]</td>
					  </tr>";
			}
			echo '</table>';
		?>
	</body>
</html>
