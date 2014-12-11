<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Find Primes in Range</title>
</head>
<body>
	<header>
		<form method="post"
			<label>Starting Index:</label>
			<input type='text' name='start'>
			<label>End:</label>
			<input type='text' name='end'>
			<input type='submit' name='result' value='Show costs'>
		</form>
		<?php
		if (isset($_POST['result'])) {
			$start = htmlentities($_POST['start']);
			$end = htmlentities($_POST['end']);
		?>
		<main>
			<?php
			for ($i = $start; $i <= $end; $i++) {
				$divider = 2;
				$maxDivider = floor(sqrt($i));
				$prime = TRUE;
				if ($i == 1 || $i == 2 || $i == 3) {
					if ($i != $end) {
						echo "<strong>$i, </strong>";
					} else {
						echo "<strong>$i</strong>";
					}			
				}
				while ($prime == TRUE && $divider <= $maxDivider)
				{
		            if ($i % $divider == 0 && $i != $end)
		            {
		            	echo "$i, ";
	                    $prime = FALSE;
		            } else if ($i % $divider == 0 && $i == $end) {
						echo "$i";
	                    $prime = FALSE;
					} else if ($i == $end) {
						echo "<strong>$i</strong>";
						break;
					} else {
						echo "<strong>$i, </strong>";
						break;
					}
		            $divider++;
				}
			}
			?>
		</main>
		<?php
		}
		?>
	</header>
</body>
</html>