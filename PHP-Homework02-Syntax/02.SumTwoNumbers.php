<?php
	function sumTwoNumbers($firstNumber, $secondNumber){
		$result = $firstNumber + $secondNumber;
		echo sprintf("\$firstNumber + \$secondNumber = $firstNumber + $secondNumber = %1\$.2f \n", $result);
	}
	
	
	sumTwoNumbers(2, 5);
	sumTwoNumbers(1.567808, 0.356);
	sumTwoNumbers(1234.5678, 333);
?>