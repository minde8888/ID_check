<?php

class Sum {
	 function __construct($kodas){//intval - sveikas skaicius
	 	$sum = 0;
	 	$sum1 = 0;
	 	$sum2 = 0;
	 	$sum3 = 0;
	 	$liekana = 0;
	 	$liekana1 = 0;
	 	// S = A*1 + B*2 + C*3 + D*4 + E*5 + F*6 + G*7 + H*8 + I*9 + J*1 
	 	for ($i=0; $i<strlen($kodas); $i++){
	 		if ($i < 9){
	 			$sum += $kodas[$i] * ($i +1);
	 			echo $kodas[$i] . " ($i +1)" . ($i +1) . " " . ($kodas[$i] * ($i +1)) . " " . $sum . PHP_EOL;
	 		} elseif ($i = 9) {
	 		    $sum += $kodas[$i] * 1;
	 		    echo $kodas[$i] . " 1 " . ($kodas[$i] * 1) . " " . $sum . PHP_EOL;
	 		    break;
	 		}
	 	}
	 	$liekana = $sum % 11;
	 	echo '11 skaicius - '. $liekana. PHP_EOL;
	 	//S = A*3 + B*4 + C*5 + D*6 + E*7 + F*8 + G*9 + H*1 + I*2 + J*3
	 	for ($i=0; $i<strlen($kodas); $i++){
	 		if ($i < 7){
	 			$sum1 += $kodas[$i] * ($i +3);
	 			echo $kodas[$i] . " ($i +1)" . ($i +1) . " " . ($kodas[$i] * ($i +1)) . " " . $sum1 . PHP_EOL;

	 		} 
	 	}
	 	for ($i=0; $i<strlen($kodas); $i++){
	 		if (($i > 6) && ($i < 10)) {
	 			$sum2 += $kodas[$i] * $i;
	 		    echo $kodas[$i] . "($i +1)" . ($i +1) . " " . ($kodas[$i] * ($i +1)) . " " . $sum2 . PHP_EOL;
	 		    	
	 		}
	 	}
	 	$sum3 = $sum2 + $sum1;
	 	$liekana1 = $sum3 % 11;
	 	echo $sum3. PHP_EOL;
	 	echo '11 skaicius - '. $liekana1. PHP_EOL;
	 }
}