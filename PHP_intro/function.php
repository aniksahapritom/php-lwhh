<?php

function factorial($n){
    for($result=1, $i=$n; $i>0; $i--){
        $result *=$i;
    }
    return $result;
}

function serve($numberOfItem="1 cup", $typeOfFoods="Coffee"){
    echo "{$numberOfItem} of {$typeOfFoods} has/have been served";
}