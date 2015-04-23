<?php
/*
*	Successful
*/

$_fp 		= fopen("php://stdin", "r");
fscanf($_fp,"%d",$sticks);

$stick_arr 	= explode(" ", fgets($_fp));

sort($stick_arr);

$k = 0;

while (!empty($stick_arr)){

	echo count($stick_arr)."\n";

	reset($stick_arr);

	$first_key  = key($stick_arr);

	$i 			= $first_key;	
	$flag 		= 0;																																																
	$flag_ind 	= array();	
	$cnt 		= 0;
	$ded		= current($stick_arr);

	while (isset($stick_arr[$i])) {

		$stick_arr[$i] = $stick_arr[$i] - $ded;
			
		if(!$stick_arr[$i]){
			unset($stick_arr[$i]);
		}
		$i++;
	}	
	$k++;
}


/* Enter your code here. Read input from STDIN. Print output to STDOUT */

?>
