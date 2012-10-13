<?php

$number_of_player = 4;

$count =0;
$result = pow(2, best_position($number_of_player,$count));
echo $result;



function best_position($number, $divisions) {
	if ($number < 2) {
		return $divisions;
	} else {
	        return best_position(floor($number / 2), $divisions + 1);
	}			
}

?>
