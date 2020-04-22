<?php

$food =[
    "vegitable"=> "Brinjal, ladis finger, potato",
    'fruits'=>"Banana, Orange, Apple",
    'drinks'=> "Milk, water",
];


// $food['drinks'] = $food['drinks']. ", Banana juice";

$food["drinks"].= ", Orange juice";  //we can sortly write this for add any value in any array

// print_r($food);
foreach($food as $Key => $value){
    echo $Key." = ".$value.PHP_EOL;
}

// $values = array_values($food);

// // print_r($values);  //for see the value of $food
// for($i=0; $i<count($values); $i++){
//     $value = $values[$i];
//     echo $value.PHP_EOL;  
// }

// $keys= array_keys($food);
// print_r($keys); //for see the key 


