<?php

$str  = "hjh+kjkjk";
$str_2 = explode("_", $str);

print_r($str_2);exit;


// $fp = fopen("php://stdin", "r");
// fscanf($fp, "%d", $m);
// $num = 10;
// $m

$phi_of = 1;
$ans = '';

for ($k=0; $k < $m; $k++) { 

	$num = fgets($fp);

	for($j=3; $j <= $num; $j++){ 
		$r_prm = array();	
		for($i=1; $i < $j; $i++){ 
			$res = getGCDBetween($j, $i);		
			if($res == 1){
				$r_prm[] = $i;
			}
		}
		if($j/count($r_prm) > $phi_of){
			$ans = $j; 
			$phi_of = $j/count($r_prm);
		}else{
			$ans = $ans; 
			$phi_of = $phi_of;
		}		
	}
	echo $ans."\n";	
}

function getGCDBetween($a, $b)
{
    while ($b != 0)
    {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    return $a;
}
?>
