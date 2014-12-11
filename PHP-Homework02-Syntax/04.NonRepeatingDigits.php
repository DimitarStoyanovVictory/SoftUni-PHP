<?php
$input = array(1234, 145, 15, 247);
foreach ($input as $item) {
	if ($item < 101) {
		echo "no \n";
		continue;
	}
	
	$output = array();
	for ($i = 102; $i <= $item && $i < 1000; $i++) { 
		$myTest = $i . '';
		if (strcmp(substr($myTest, 0, 1), substr($myTest, 1, 1)) != 0 && strcmp(substr($myTest, 1, 1), substr($myTest, 2, 1)) != 0 && strcmp(substr($myTest, 0, 1), substr($myTest, 2, 1)) != 0)  {
			array_push($output, "$i");
		}
	}
	echo join(", ", $output), "\n";
}

?>
