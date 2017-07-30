<!doctype html>
<html>
	<head>
		<title>Feedback Form</title>
	</head>
	<body>
		<body bgcolor = "skyblue">
		<form action = "feedback.php" method = "post">
		<h1>Customer Feedback</h1><p>
		<b>Plrease tell us what you feel..!</b>
		<p>
		<tr>
		<td>Your name:</td><br>
		<input type = "text" name = "name" size = "30"
			maxlength = "30"/>
		</td><p>
		</tr>
		<td>Your email address:</td><br>
		<input type = "text" name="email" size = "30"
			maxlength = "40"/>
		</td><p>
		
		<tr>
		<td>How did you find me?</td><p>
		<td><select name="find">
			<option value = "a">I'm a regular customer</option>
			<option value = "b">Tv advertising</option>
			<option value = "c">Phone directory</option>
			<option value = "d">Word of mouth</option>
			</select>
			</td>
		</tr><p>
		<td>Your feedback:</td><br>
		<textarea name = "feedback" rows = "7" col = "50"
			maxlength = "200">
		</textarea>
		</td><p>
		<input type = "submit" value = "Submit Feedback" />
		</form>
		
				
		
			
		
	</body>
</html>
