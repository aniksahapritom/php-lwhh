<?php 
$fruits = ['mango','banana', 'pineapple','orange', 'plum', 'dates'];

// $someFruits = array_splice($fruits, 2); //from two offset cut the array fully

// print_r($someFruits);
// print_r($fruits); //New array made
$someDataAdd=['lalgulapi', 'kisoralu' ];
$someFruits = array_splice($fruits,2,3,$someDataAdd);

print_r($someFruits);
print_r($fruits);
