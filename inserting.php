<?php
function  insertionSort( $ar, $m) {

$ar  = array_reverse($ar);
$var = $ar[0];
$flag = false;
for($j=0; $j<$m; $j++){
	if(isset($ar[$j+1]) && $ar[$j+1] > $var){
		$ar[$j]=$ar[$j+1];		
	}else if(isset($ar[$j+1]) && $ar[$j+1] < $var){
		$ar[$j] = $var;
		$flag = true;
	}else{
		$ar[$j] = $var;
	}
	
	$ans = implode(" ", array_reverse($ar));
	echo $ans."\n";

	if($flag === true){
		exit;
	}
	array_reverse($ar);
}

}

$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$ar = array();
$s=fgets($fp);
$ar = explode(" ", $s);
for($i=0;$i < count($ar);$ar[$i++]+=0);
insertionSort($ar,$m);


?>