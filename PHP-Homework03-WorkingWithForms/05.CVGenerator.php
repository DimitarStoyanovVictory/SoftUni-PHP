<!DOCTYPE html>
<html>
<head>
	<title>Print Tags</title>
</head>
<body>
	<header>
		<form method="post">
			<fieldset style="width: 180px">
				<legend name="PI">Personal Information</legend>
				<input type="text" name="firstName"/><br />
				<input type="text" name="lastName"/><br />
				<input type="text" name="email"/><br />
				<input type="text" name="phoneNumber" /><br />
				<label>Female</label>
				<input type="radio" />
				<label>Male</label>
				<input type="radio" /><br />
				<label>Birth Date</label><br />
				<input type="text" /><br />
				<label>Nationality</label><br />
				<select>
					<option selected="selected">Bulgaria</option>
					<option>France</option>
				</select>
			</fieldset>
		</form>
	</header>
	<?php
	$name = htmlentities($_POST["PI"]);
	$firstName = htmlentities($_POST["firstName"]);
	$lastName = htmlentities($_POST["lastName"]);
	$email = htmlentities($_POST["email"]);
	$phoneNumber = htmlentities($_POST["phoneNumber"]);
	?>
</body>
</html>
