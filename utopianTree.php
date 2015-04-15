<?php
function utopianTree($a){  
    $height = 1;
    for($j=1; $j <=$a; $j++){
        if($j%2 == 0){
            $height = $height + 1; 
        }else{
            $height = $height + $height;
        } 
    }   
    return $height;
}    
$_fp = fopen("php://stdin", "r");
$testCase = fgets($_fp);

for($i=0; $i<$testCase; $i++)
{ 
    $_a = (int)fgets($_fp);
    $height = utopianTree($_a);    
    print($height) . "\n";
}
fclose($_fp);
?>