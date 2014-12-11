<?php

$month = date("F");
$year = date("Y");
$totalDays = date("t");
$firstSunday = date("j", strtotime("Sunday"));

for($i = $firstSunday; $i <= $totalDays; $i += 7) {
	$date = strtotime("$i $month $year");
	echo date("jS F, Y", $date) . "\n";
}

?>