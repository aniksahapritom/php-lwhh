<?php

// $number =array();
// for($i=12;$i<21;$i++){
//     array_push($number,$i);
// }

//We can create same output by range

$number= range(12,20,2); //here=>  range(startValue,endValue,stepping)
print_r($number);

foreach(range(12,20,2) as $numValue){
    echo $numValue.PHP_EOL; //Without showing array value of the number
}