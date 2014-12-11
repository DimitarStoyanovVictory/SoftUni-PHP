<!DOCTYPE html>
<html>
<head>
	<title>Most Frequent Tag</title>
</head>
<body>
	<section>
		<article>
			<form method="post">
				<p>Enter Tags:</p>
				<input type="text" name="name"/>
				<input type="submit" name="sub"/>
			</form>
		</article>
	</section>
	<?php
	if (isset($_POST["sub"])) {
		$input = htmlentities($_POST["name"]);
		$tags = split(", ", $input);
		$countedArray = array_count_values($tags);
		$maxSeq = array_search(max($countedArray), $countedArray);
		arsort($countedArray);
		foreach ($countedArray as $key => $value) {
			echo "$key : $value times <br>";
		}
		echo "Most Frequent Tag is: $maxSeq";
	}		
	?>
</body>
</html>
