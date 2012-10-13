<?php

$number_of_player = 5;

$count =0;
$result = best_selection($number_of_player,$count);


function best_selection($number,$count){

	if($number <= 3 ){	
		$count++;
		$abc = $count;
			
	}else{
		$a = $number/2;
		$count++;
		test((int)$a,$count);	
	}
	echo pow(2,$abc);exit; 
	
}

?>
