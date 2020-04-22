<?php
$fruits = array('apple', 'banana', 'mango', 'dates','jackfruits','paineapple');

$somefruits1=array_slice($fruits,0,3);
$somefruits2 = array_slice($fruits,3,null,true);
$fruitsMarge = array_merge($somefruits1,$somefruits2);  // Array merge by array_merge function
print_r($somefruits1);
print_r($somefruits2);
print_r($fruitsMarge);

$fruitDataSum= $somefruits1 + $somefruits2;
print_r($fruitDataSum);

// $someFruits = array_splice($fruits, 3);


// print_r($someFruits);
// print_r($fruits);


