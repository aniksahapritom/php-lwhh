<?php
$numbers= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);

function square($n){
    printf('Square of %d is %d'.PHP_EOL,$n, $n*$n);
}
// array_walk($numbers, 'square'); //same thing we can do by array_walk function

function cube($n){
    return $n*$n*$n;
}

$newArray =array_map('cube',$numbers);
print_r($numbers);
print_r($newArray);

function even($n){
    return $n%2==0;
}
$arrayEven =array_filter($numbers,'even');
print_r($arrayEven);

function odd($n){
    return $n%2==1;
}
$arrayOdd = array_filter($numbers, 'odd');
print_r($arrayOdd);

foreach($arrayOdd as $oddNumber){
    echo $oddNumber.PHP_EOL;
}

$person =['kamal','sujon','jamal','prokash','josim','salma','kobir','polash','himel','kisor','korim'];

function filterByS($name){
    return $name[-1]=='l' || $name[0]=='s'; //findout the value from person whose last letter is L and first letter is S
}
$nameArrayEndByL= array_filter($person,'filterByS');
print_r($nameArrayEndByL);



