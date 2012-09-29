<?php

//$test=$current_run = array('6','6','6','6','6','6','6','6','6','6','6');

$test=$current_run = array('1','2','3','4','5','6','7','8','9','10','11'); //3

//$test=$current_run = array('2', '5', '1', '2' ,'4' ,'1' ,'6' ,'5' ,'2','2','1'); //6

//$test=$current_run = array('2','5','5','2','4','1','6','5','6','6','12');

	$num_player = 3;

	natsort($current_run);
	echo "<pre>";
	print_r($current_run);

	$total = 0;

	for($i=1;$i<=$num_player;$i++){
		$number = array_pop($current_run) ;
		$last[] = $number;
		$total = $total + $number;
	}

	$count =0;

$s ='';

for($i=0;$i<$num_player;$i++){

	if($i == 0){

		$s .= 'for($i'.$i.'=0;$i'.$i.'<=11;$i'.$i.'++){';
	
	}else{

		$s .= 'for($i'.$i.'=$i'.($i-1).'+1;$i'.$i.'<=11;$i'.$i.'++){';	
	}

}

$t = '$result =';

$f ="";

for($i=0;$i<$num_player;$i++){

	if($i == ($num_player-1)){
		$t .= '$test[$i'.$i.']';
	}else{
		$t .= '$test[$i'.$i.']+';
	}
	$f .= '}';
}

$code = $s .  $t.';if($result == $total)$count = $count + 1;' .$f.'echo $count;';

//echo $code;

$final_value = eval($code);

echo $final_value;

exit;


/*
$test=$current_run = array('6','6','6','6','6','6','6','6','6','6','6');

//$test=$current_run = array('2','5','5','2','4','1','6','5','6','6','6');

	$num_player = 3;

	//$r = asort($current_run);

	natsort($current_run);
	echo "<pre>";
	print_r($current_run);

	$total = 0;

	for($i=1;$i<=$num_player;$i++){
		$number = array_pop($current_run) ;
		$last[] = $number;
		$total = $total + $number;
	}

$count =0;


for($i=0;$i<=11;$i++){

	for($j=$i+1;$j<=11;$j++){

		for($K=$j+1;$K<=11;$K++){

			$result =$test[$i] + $test[$j] + $test[$K];
			if($result == $total)
				$count = $count + 1;
		}

	}

}

echo $count;
*/
?>
