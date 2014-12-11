<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Square Root Sum</title>
    <style>
    	table, th, td{
    		border: 1px solid black;
    	}
    </style>
</head>

<body>
	<table>
		<header>
			<tr>
				<th>Number</th>
				<th>Square</th>
			</tr>
		</header>
		<main>
			<?php
			$sum = 0;
			for ($i=0; $i < 101; $i += 2) {
				$sum += round(sqrt($i), 2);
			?>
		<tr>
			<td><?= $i?></td>
			<td><?= round(sqrt($i), 2)?></td>
		</tr>
			<?php
			}
			?>
		</main>
		<footer>
		<tr>
			<th>Total:</th>
			<td><?=$sum?></td>
		</tr>
		</footer>
</table>
</body>
</html>
