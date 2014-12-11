<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Sum of Digits</title>
	 <style>
    	table, th, td{
    		border: 1px solid black;
    	}
    </style>
</head>
<body>
	<header>
		<form method="post"
			<label>Input string:</label>
			<input type="text" name="input">
			<input type="submit" name="result" value="Show result">
		</form>
		<?php
		if (isset($_POST['result'])) {
			$input = htmlentities($_POST['input']);
			$numbers = split(", ", $input);	
		?>
		<main>
			<table>
				<?php
				for ($i=0; $i < sizeof($numbers); $i++) {
					$sum = 0; 
					for ($j = 0; $j < strlen($numbers[$i]); $j++) { 
						if ((int)$numbers[$i][$j] == 0 && $numbers[$i][$j] != "0") {
							$sum = "I cannot sum that";
							break;
						}
						$sum += (int)$numbers[$i][$j];
					}
				?>
				<tr>
					<td><?= $numbers[$i] ?></td>
					<td><?= $sum ?></td>
				</tr>
				<?php 
				}
				?>
			</table>
		</main>
		<?php
		}	
		?>
	</header>
</body>
</html>

	<!-- 1111, 2222, 3333, 4444, asdf -->