<?php
/*
*	Failed.
*/
$_fp 			= fopen("php://stdin", "r");
$first_line 	= fgets($_fp);
$first_line_arr = explode(' ', $first_line);

$jar = array();

for ($i=0; $i < $first_line_arr[1]; $i++) { 
	
	$abk     = fgets($_fp);
	$abk_arr = explode(" ", $abk);	
	$k		 =	$abk_arr[0];
	
	while($k <= $abk_arr[1]) {		

		if(!isset($jar[$k])){
			$jar[$k] = 0;
		}

		$jar[$k] = $jar[$k] + $abk_arr[2];	
		$k++;	    
	}
}

// array_sum($jar) = 19987281443433;
// sleep(1);
// $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

$avg_cnd = array_sum($jar)/ $first_line_arr[0];
echo (int)$avg_cnd;

// echo "Process Time: {$time}";
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

?>