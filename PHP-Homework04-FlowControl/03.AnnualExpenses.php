<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Show Annual Expenses</title>
	 <style>
    	table, th, td{
    		border: 1px solid black;
    	}
    </style>
</head>
<body>
	<header>
		<form method="post"
			<label>Enter number of years:</label>
			<input type='text' name='years'>
			<input type='submit' name='result' value='Show costs'>
		</form>
		<?php
		if (isset($_POST['result'])) {
			$input = htmlentities($_POST['years']);
		?>
		<main>
		<table>
			<tr>
				<th>Year</th>
				<th>January</th>
				<th>February</th>
				<th>March</th>
				<th>April</th>
				<th>May</th>
				<th>June</th>
				<th>July</th>
				<th>August</th>
				<th>September</th>
				<th>Octomber</th>
				<th>November</th>
				<th>December</th>
				<th>Total:</th>
			</tr>
			<?php
			for ($i= 2014; $i >= 2014-$input; $i--) {
				$first = rand(0, 999); $second = rand(0, 999); $third = rand(0, 999); $fourth = rand(0, 999); $fifth = rand(0, 999); $sixth = rand(0, 999);
				$seventh = rand(0, 999); $eighth = rand(0, 999); $ninth = rand(0, 999); $tenth = rand(0, 999); $eleventh = rand(0, 999); $twelfth = rand(0, 999);
				$total = $first + $second + $third + $fourth + $fifth + $sixth + $seventh + $eighth + $ninth + $tenth + $eleventh + $twelfth;
			?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $first ?></td>
				<td><?= $second ?></td>
				<td><?= $third ?></td>
				<td><?= $fourth ?></td>
				<td><?= $fifth ?></td>
				<td><?= $sixth ?></td>
				<td><?= $seventh ?></td>
				<td><?= $eighth ?></td>
				<td><?= $ninth ?></td>
				<td><?= $tenth ?></td>
				<td><?= $eleventh ?></td>
				<td><?= $twelfth ?></td>
				<td><?= $total ?></td>
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