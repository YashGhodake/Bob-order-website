<!doctype html>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];
?>
<html>
	<head>
		<title>Bob's auto parts - Feedback submitted</title>
	</head>
	<body>
		<?php
			$toaddress = "mr.ghodakeyash@gmail.com";
			$subject = 'Feedback from website.';
			$mailcontent = 'Customer name: '.$name."\n"
							.'Customer email: '.$email."\n"
							.'Customer comments: \n'.$feedback."\n";
			$fromaddress = $email;
			
			mail ($toaddress, $mailcontent, $fromaddress);
			
		?>
		<h1>Bob's auto parts - Feedback submitted</h1>
		<p>Your feedback has been sent.</p>
		<br>Following are the details:<p>
		<?php
			echo 'Name: '.$name.'<br>Email: '
					.$email.'<br>Comment: '.$feedback;
			
		?>
		
	</body>
</html>