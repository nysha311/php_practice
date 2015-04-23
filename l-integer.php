<?php

function lonelyinteger($a) {

	$i = 0;
	$res = '';
	$tmp = '';
	while(isset($a[$i]))
	{ 
		$tmp = $a[$i];
		$a[$i] = 0;

		if(!in_array(trim($tmp), $a)){
			$res = $tmp;			
		}

		$a[$i] = $tmp;
		$i++;
	}

	return $res;
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_a_cnt);

$_a = fgets($__fp);
$_a = explode(' ',$_a);

$res = lonelyinteger($_a);
echo $res;

// print_r($_a);
?>
