<?php
/*
* Successful
*/

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp, "%d", $cases);
$compare_arr = array();

for($i=0; $i < $cases; $i++){

	$pupils 	= explode(' ', fgets($_fp));
	$timings 	= explode(' ', fgets($_fp));

	$t 		= 0;
	$cnt 	= 0;

	while (isset($timings[$t])) {

		if($timings[$t] <= 0){
			
			$cnt++;
		}
		$t++;
	}

	$compare_arr[$i][0] = $pupils[1];
	$compare_arr[$i][1] = $cnt;
}

foreach ($compare_arr as $key => $value) {

	if($value[1] >= $value[0]){
		echo 'NO'."\n";
	}else{
		echo 'YES'."\n";
	} 	
}

// print_r($compare_arr);
?>




