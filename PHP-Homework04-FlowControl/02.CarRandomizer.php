<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Rich Peopoles's Problems</title>
	 <style>
    	table, th, td{
    		border: 1px solid black;
    	}
    </style>
</head>
<body>
	<header>
		<form method="post"
			<label>Enter cars</label>
			<input type="text" name="cars">
			<input type="submit" name="result" value="Show result">
		</form>
		<?php
		if (isset($_POST['result'])) {
			$input = htmlentities($_POST['cars']);
			$cars = split(", ", $input);	
		?>
		<main>
		<table>
			<tr>
				<th>Car</th>
				<th>Color</th>
				<th>Count</th>
			</tr>
			<?php
			$colors = ["green", "blue", "red", "black", "white", "orange", "purple", "violet", "yellow"];
			function randomColor($colors) {
				return $colors[rand(0, sizeof($colors)-1)];
			}
			
			for ($i=0; $i < sizeof($cars); $i++) {
				$color = randomColor($colors);
				$quantity = rand(1, 5); 	
			?>
			<tr>
				<td><?= $cars[$i] ?></td>
				<td><?= $color ?></td>
				<td><?= $quantity ?></td>
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