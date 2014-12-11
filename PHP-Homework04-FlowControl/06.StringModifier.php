<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Modify String</title>
</head>
<body>
	<header>
		<form method="post">
			<input type="text" name="input">
			<input type="radio" name="checkBox" value="1";>
			<label>Check Palindrome</label>
			<input type="radio" name="checkBox" value="2";>
			<label>Reverse String</label>
			<input type="radio" name="checkBox" value="3";>
			<label>Split</label>
			<input type="radio" name="checkBox"; value="4">
			<label>Hash String</label>
			<input type="radio" name="checkBox"; value="5">
			<label> Shuffle String </label>
			<input type="submit" name="result" value="Submit">
		</form>
	</header>
	<main>
		<?php
			function checkPalindrome($input){
				if ($input == strrev($input)) {
					return $output = "$input is a palindrome!";
				}
				else {
					return $output = "$input is not a palindrome!";
				}
			}
		?>
		<?php
		if (isset($_POST['result']) && isset($_POST['checkBox'])) {
			$input = htmlentities($_POST['input']);
			$functionName = htmlentities($_POST['checkBox']);	
			switch ($functionName) {
				case '1': $output = checkPalindrome($input); break;
				case '2': $output = strrev($input); break;
				case '3': $output = join(" ", str_split(str_replace(" ", "", $input), 1)); break;
				case '4': $output = password_hash("$input", PASSWORD_DEFAULT); break;
				case '5': $output = str_shuffle($input); break;
			}
			echo "$output";
		}
		?>
	</main>
</body>
</html>