<!DOCTYPE html>
<html>
<head>
	<title>Print Tags</title>
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
		for ($i=0; $i < sizeof($tags) && sizeof($tags) > 1; $i++) {
			echo "$i : $tags[$i] <br>";
		}
	}	
	?>
</body>
</html>
