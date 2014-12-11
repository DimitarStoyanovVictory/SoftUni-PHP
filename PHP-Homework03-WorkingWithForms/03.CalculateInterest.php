<!DOCTYPE html>
<html>
<head>
	<title>Calculate interest</title>
</head>
<body>
	<section>
		<article>
			<form method="post">
				<label>Enter Amount</label>
				<input type="text" name="amount"><br />
				<input type="radio" name="radio" value="USD">USD
				<input type="radio" name="radio" value="EUR">EUR
				<input type="radio" name="radio" value="BGN">BGN<br />
				<label>Compound Interest Amount</label>
				<input type="text" name="CIA"><br />
				<select name="period">
					<option>6 Months</option>
					<option>1 Year</option>
					<option>2 Years</option>
					<option>5 Years</option>
				</select>
				<input  type="submit" name="calc" value="Calculate"/>
			</form>
		</article>
	</section>
	<?php
	if (isset($_POST["calc"])) {
		$amount = htmlentities($_POST["amount"]);
		if (isset($_POST["radio"])){
			$currency = htmlentities($_POST["radio"]);
			switch ($currency) {
				case 'USD' : $currency = "$"; break;
				case 'EUR' : $currency = "€"; break;
				case 'BGN' : $currency = "BG"; break;																				
			}	
		}
		$cia = htmlentities($_POST["CIA"]);
		$period = 0;
		switch (htmlentities($_POST["period"])) {
			case "6 Months": $period = 6; break;
			case "1 Year": $period = 12; break;
			case "2 Year": $period = 24; break;
			case "5 Year": $period = 60; break;
		}
		$interest = $cia / 12;	
		for ($i=0; $i < $period; $i++) { 
			$amount *= (100 + $interest) / 100; 
		}
		
		echo "$currency " . round($amount, 2);
	}
	?>
</body>
</html>
