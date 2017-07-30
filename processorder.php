<!doctype html>
<?php
	require('header.inc');
//create short variables
 
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$pincode = $_POST['find'];
	
?>
<html>
<body>
<?php
	$totalqty = 0;
	$totalqty = $tireqty+$oilqty+$sparkqty;
	$pinamt = 0;
	
	if($totalqty == 0)
	{
	
		echo '<h1>You did not order anything from store !</h1><br />';
	
	}
	else
	{
		echo '<h3>'. $name.',Thank you for shopping...!</h3>';
		echo "<h2><p>Order is Processed</h2>";
		echo '<h3>Your order is processed at </h3>';
		echo date ('H:i, js F');
		echo '</p>';
	
	
//

		echo '<p><b>Your order is as follows: </b></p>';
		echo $tireqty.' tires<br />';
		echo $oilqty.' Oil bottles<br />';
		echo $sparkqty.' Spark Plugs<br />';


		echo '<p>';
		
		echo 'Items ordered: '.$totalqty.'<br />';
		
		$totalamount = 0.00;
		
		define('TirePrice',100);
		define('OilPrice',10);
		define('SparkPrice',4);
		
		$totalamount = $tireqty*TirePrice+
						$oilqty*OilPrice+
						$sparkqty*SparkPrice;
						
		echo 'Subtotal: '.number_format($totalamount,2).'<br />';
		
		$discount=0.00;
		
		if($tireqty<10)
		{
			$discount=0;
		}
		elseif ($tireqty>=10 && $tireqty <=49)
		{
			$discount = 5;
		}
		else if ($tireqty>=50 && $tireqty <=99)
		{
			$discount = 10;
		}
		else if ($tireqty>=100)
		{
			$discount=15;
		}
		if($oilqty<10)
		{
			$discount=$discount+0;
		}
		elseif ($oilqty>=10 && $oilqty <=49)
		{
			$discount = $discount+5;
		}
		else if ($oilqty>=50 && $oilqty <=99)
		{
			$discount = $discount+10;
		}
		else if ($oilqty>=100)
		{
			$discount=$discount+15;
		}
		if($sparkqty<10)
		{
			$discount=$discount+0;
		}
		elseif ($sparkqty>=10 && $sparkqty <=49)
		{
			$discount = $discount+5;
		}
		else if ($sparkqty>=50 && $sparkqty <=99)
		{
			$discount = $discount+10;
		}
		else if ($sparkqty>=100)
		{
			$discount=$discount+15;
		}
		
		//shipping charges
		
		if ($pincode == 'a')
		{
			$pinamt = 50;
		}
		else if($pincode=='b')
		{
			$pinamt = 100;
		}
		else if($pincode=='c')
		{
			$pinamt = 150;
		}
		else if($pincode=='d')
		{
			$pinamt = 200;
		}
		
		$taxrate = 0.10; //Local sales tax 10%
		
		$totalamount = $totalamount + (1 + $taxrate)+$pinamt-$discount;
		echo '<p>You get '.$discount.' discount<p>';
		echo '<p>Shipping charges for your address: '.$pinamt;
		echo '<p>Total including tax: '.number_format($totalamount,2).'<br />';
		echo '<p>Shipping address is: '.$address;
	}
	$date = date('H:i,js F');
	@ $fp =  fopen("C:/xampp/htdocs/order.txt",'ab');
	$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil \t".$sparkqty." Spark Plugs \t Rs.".$totalamount."\t".$address."\t\n";
	if(!$fp)
	{
		echo "<p><strong> Your order cannot be processed at this time. ".
				"Please try again later.</strong></p>";
				exit;
	}
	fwrite ($fp,$outputstring,strlen($outputstring));
	fclose($fp);
	
	require('footer.inc');
?>

</body>
</html>