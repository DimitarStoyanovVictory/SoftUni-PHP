<?php
	function varType($input){
		foreach ($input as $element) {
			if (is_numeric($element)) {
				var_dump($element). "\n";
			} else {		
				echo gettype($element). "\n";	
			}	
		}
	}    
	
	$input = array("hello", 15, 1.234, array(1, 2, 3), (object) [2, 34]);
	varType($input);
?>