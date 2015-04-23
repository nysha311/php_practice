<?php
/*
*	Failed.
*/
// $_fp = fopen("php://stdin", "r");
// fscanf($_fp, "%d", $sz);
// $ar = fgets($_fp);
// $ar = explode(" ",$ar);

/*
for($i=0; $i<100; $i++){
	$cnt = 0;
	for($j=0;$j<$sz;$j++ ){
		if($i == $ar[$j]){
			$cnt=$cnt+1;
		}

	}	  
	echo $cnt." ";    
}*/

$sz 	= 10;
$ar 	= array(63,1,20,54,53,53,20,45,53,3);

// $arr = array();

// for($k=0; $k < 100; $k++){
// 	$arr[] = $k;
// }

// $a 		= 0;
// $cnt 	= 0;

// do{
// 	$i 		= $arr[$a];

// 	for($j=0;$j<$sz;$j++ ){
// 		if($i == $ar[$j]){
// 			$cnt=$cnt+1;
// 		}

// 	}	  
// 	echo $cnt." ";

// 	$a++;

// }while($arr[$a] > 99);

for($i=0; $i<100; $i++){
	$cnt = 0;
	for($j=0;$j<$sz;$j++ ){
		if($i == $ar[$j]){
			$cnt=$cnt+1;
		}
	}	  
	echo $cnt." ";    
}


	sleep(1);
	$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
	echo "Process Time: {$time}";
	// Process Time: 1.0061590671539

?>
