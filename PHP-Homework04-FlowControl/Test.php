<?php
	$input = "I can split that";
	$output = join(" ", str_split(str_replace(" ", "", $input), 1));
?>