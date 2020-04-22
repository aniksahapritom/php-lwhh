<?php 

function isEven($n){ //parameter
    if($n%2==0){
        return true;
    }
    return false;
}

$x = 13;
if (isEven($x)){ //argument
    echo "{$x} is an even number";
}else{
    echo "{$x} is an odd number";
}