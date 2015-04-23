<?php


function maxXor($l, $r) {
	
	$tmp = 0;
	$ans = 0;
	$val = 0;
	

	for ($l_var = $l; $l_var <= $r; $l_var++) { 
		$r_var = $l;
		while($r_var <= $r){

			$val = $l_var ^ $r_var;		
			if($val > $tmp){
				$ans = $val;
				$tmp = $val;
			}
			$r_var++; 
		}

	}
	return $ans;
}
    
$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%d", $_l);


fscanf($_fp, "%d", $_r);

$res = maxXor($_l, $_r);

echo $res;















?>

