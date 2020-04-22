<?php
$simple1= ['a'=>'lemon','b'=>'anik', 'c'=>'saha', 'd'=>'pritom'];
$simple2= ['a'=>'himel','b'=>'anik', 'c'=>'bristy', 'e'=>'pritom'];

$number1=[1,5,44,4,87,25,12,19,84,22,14,32,41,788,14];
$number2 =[5,9,44,15,47,85,12,22,14,2,5,87,32,41];

// $intersectionNumber=array_intersect($number2,$number1);
// print_r($intersectionNumber);
// $diff= array_diff($number2,$number1);
// print_r($diff);
// $diff1= array_diff($number1,$number2);
// print_r($diff1);

$intersectionS= array_intersect_key($simple1,$simple2);
print_r($intersectionS);