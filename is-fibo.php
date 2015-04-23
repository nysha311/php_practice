<?php
/*
*	Failed.
*/

$_fp = fopen("php://stdin", "r");
fscanf($_fp,"%d",$fibo_testcase);

// $fibo_num = 50;
// $fibo_testcase = 7;
$fibo_num = array();



function call_related_arr($n, $n_cnt){

	$ans_arr  = array();
	$pre = 0;
	$nxt = 0;

	for(;$n < $n_cnt; $n++){ 

		$ans 		= $pre + $nxt;	
		$ans_arr[]  = $ans;

		if($ans == 0){		
			$nxt = 1;
		}

		$pre = $nxt;
		$nxt = $ans;
	}

	return $ans_arr;
}

// echo "<pre>";
// print_r($ans_arr);
// exit;

for ($i=0; $i < $fibo_testcase; $i++) { 
	$fibo_num[] 	= fgets($_fp);
}

for ($case=0; $case < count($fibo_num); $case++) { 

	// if($fibo_num[$case] >=0 && $fibo_num[$case] < 10){

	// 	$v = 3;

	// }else if($fibo_num[$case] > 10 && $fibo_num[$case] < 100){

	// 	$v = 7;
	// }else if($fibo_num[$case] > 100 && $fibo_num[$case] < 1000){
	// 	$v = 12;
	// }else if($fibo_num[$case] > 1000 && $fibo_num[$case] < 10000){
	// 	$v = 17;
	// }else if($fibo_num[$case] > 10000 && $fibo_num[$case] < 100000){
	// 	$v = 21;
	// }else if($fibo_num[$case] > 100000 && $fibo_num[$case] < 1000000){
	// 	$v = 26;
	// }else if($fibo_num[$case] > 1000000 && $fibo_num[$case] < 10000000){
	// 	$ans_arr = call_related_arr(31, 5);
	// }else if($fibo_num[$case] > 10000000 && $fibo_num[$case] < 100000000){
	// 	$ans_arr = call_related_arr(36, 5);
	// }else if($fibo_num[$case] > 100000000 && $fibo_num[$case] < 1000000000){
	// 	$ans_arr = call_related_arr(40, 5);
	// }else if($fibo_num[$case] > 1000000000 && $fibo_num[$case] < 10000000000){
	// 	$ans_arr = call_related_arr(45, 5);
	// }

	for ($cir=10; $cir <= 10000000000; $cir*=10) { 
		
		$v = 3;
		$ans_arr = call_related_arr($v, 5);
		$v+=5;

	}

	

	if($fibo_num[$case] == 0 || $fibo_num[$case] == 1){
		echo "IsFibo\n";
	}else if(in_array($fibo_num[$case], $ans_arr)){
		echo "IsFibo\n";
	}else{
		echo "IsNotFibo\n";
	}
}



sleep(1);
$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
echo "Process Time: {$time}";

/* Enter your code here. Read input from STDIN. Print output to STDOUT */
?>
