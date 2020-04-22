<?php

$foods = [
    'vegetables' =>explode(", ", "brinjal, borcolli, carrot, capsicam"),
    'fruits' => explode(", ","Banana, Orange, apple"),
    'drinks' => explode(", ","Milk, water")
];

// print_r($foods);  

array_push($foods['drinks'],'Orange Juice');  //add this drink in the bollom of array of the drink

// print_r($foods);


$simple =[
    "test" => [
        "test-again" =>[
            "a",
            "b",
            "c",
            "d",
        ]
    ],
        
];

// echo $simple['test']['test-again'][3];

$testing =[
    [1,2,3,], [22,33,44],["rahim","Karim","Polash"]
];
// print_r($testing);

// echo $testing[2][1];

$hello_man= ["Sourave","Sabuj","Ajmir",["Ibrahim", "Sojib", "Simul", ["Bindu","Hemail"]]];

echo $hello_man[3][3][0];
