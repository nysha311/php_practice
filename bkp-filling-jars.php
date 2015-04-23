<?php

$_fp 			= fopen("php://stdin", "r");
$first_line 	= fgets($_fp);
$first_line_arr = explode(' ', $first_line);

$jar 			= array();
$sum 			= 0;

// $first_line_arr[1] = 4328;
$chunk_cnt  = $first_line_arr[1]/10000;
$chunk_cnt  = (int)$chunk_cnt;
$chunk_left = $first_line_arr[1]%10000;

for ($i=1; $i <= $chunk_cnt; $i++) { 

	$loop_cnt = 10000;	
	$sum = loop_thru($_fp, $loop_cnt, $jar, $sum);

	echo $_fp.','.$loop_cnt;
	exit;
}

if($chunk_left > 0){

	$loop_cnt = $chunk_left;
	$sum = loop_thru($_fp, $loop_cnt, $jar, $sum);
}



function loop_thru($_fp, $loop_cnt, $jar, $sum){	

	for ($i=0; $i < $loop_cnt; $i++) { 

		$abk     = fgets($_fp);
		$abk_arr = explode(" ", $abk);	
		$k		 = $abk_arr[0];
		
		while($k <= $abk_arr[1]) {		

			if(!isset($jar[$k])){
				$jar[$k] = 0;
			}

			$jar[$k] = $jar[$k] + $abk_arr[2];
			$sum 	 = $sum 	+ $jar[$k];	
			$k++;	    
		}
	}
	return $sum;
}	


// echo '<pre>';
// print_r($jar);
// echo '   ';
// $arr_sum = 19987281443433;
// $avg_cnd = array_sum($jar)/ $first_line_arr[0];

$avg_cnd = $sum/ $first_line_arr[0];
echo (int)$avg_cnd.'   ';

sleep(1);
$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo "Process Time: {$time}";

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

?>