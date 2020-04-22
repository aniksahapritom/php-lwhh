<?php
$x = 2;
$y= 4;

function greaterOrSmaller($x,$y){
    if($x>$y){
        return 1;
    }elseif($x==$y){
        return 0;
    }else{
        return -1;
    }
}
if (greaterOrSmaller($x,$y)==1){
    echo "{$x} is greater than {$y}".PHP_EOL; 
}elseif(greaterOrSmaller($x,$y)==0){
    echo "{$x} is equal to {$y}".PHP_EOL;
}else{
    echo "{$x} is less than {$y}".PHP_EOL; 
}

//speceShipping
// $x <=> $y

$result = $x <=> $y;
if($result==1){
    echo "{$x} is greater than {$y}".PHP_EOL; 
}elseif($result==0){
    echo "{$x} is equal to {$y}".PHP_EOL; 
}else {
    echo "{$x} is less than {$y}".PHP_EOL;
}





