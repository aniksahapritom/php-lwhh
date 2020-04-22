<?php
    $student =[
        'name'=>'Jamal',
        'group'=> 'science',
        'roll'=> '5',
        'class'=> 8,
        'section' => 'B',
    ];

// print_r($student);
// echo join(",",$student); //Join value divide by comma.
$serialized = serialize($student);
echo $serialized;
$unseralized = unserialize($serialized);
print_r($unseralized);

$encodeing = json_encode($student);
print_r($encodeing);

echo "========\n";

$decodeing = json_decode($encodeing); //it create object
print_r($decodeing);

echo "==============\n";

$decodeing2= jeson_decode($encodeing, true); //if we use "true" then it will be array again. Not object
print_r($decodeing2); 