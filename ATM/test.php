<?php

//URL will be : http://projects.kp/test.php?wm=115&total=120

$wm = (int)$_GET["wm"]; //Withdrawal amount

$total = (float)$_GET["total"]; //balance

if($wm%5==0){

	if($wm<$total){

		$total = $total - $wm - 0.50;
		echo "Successful Transaction";

	}else{

		echo "Insufficient Funds";

	}

}else{
	echo " Incorrect Withdrawal Amount (not multiple of 5)";
}

echo "</br>";
echo $total;
?> 
