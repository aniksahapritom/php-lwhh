<?php
$numbers= [1,2,3,4,5];

function sum($oldValue, $newValue){
    if($newValue%2==1){
        return $oldValue + $newValue;
    }
    return $oldValue;
}
$sum = array_reduce($numbers,'sum');

echo $sum;