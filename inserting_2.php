<?php

// 10
// 2 3 4 5 6 7 8 9 10 1

// 2 3 4 5 6 7 8 9 10 10
// 2 3 4 5 6 7 8 9 9 10
// 2 3 4 5 6 7 8 8 9 10
// 2 3 4 5 6 7 7 8 9 10
// 2 3 4 5 6 6 7 8 9 10
// 2 3 4 5 5 6 7 8 9 10
// 2 3 4 4 5 6 7 8 9 10
// 2 3 3 4 5 6 7 8 9 10
// 2 2 3 4 5 6 7 8 9 10
// 1 2 3 4 5 6 7 8 9 10

// 1 10 9 8 7 6 5 4 3 2

// 10 8 7 6 9

function insertionSort($ar,$m) {
	
	$ar  = array_reverse($ar);
	$var = $ar[0];
	$flag = false;

	for($j=1; $j < $m; $j++){

			if($ar[$j-1] < $ar[$j]){			

				$tmp 		= 	$ar[$j-1];
				$ar[$j-1]	=	$ar[$j];
				$ar[$j] 	= 	$tmp; 

			}
			// else if($ar[$j] < $var){
			// 	$ar[$j-1] = $var;
			// 	$flag = true;
			// }else{
			// 	$ar[$j-1] = $var;
			// }
						
		}
		$ans = implode(" ", array_reverse($ar));
		echo $ans."\n";
		if($flag === true){
			continue;
		}
		array_reverse($ar);
	}
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);
$temp = fgets($fp);
$arr = explode(' ',$temp);

insertionSort($arr, $m);

?>
