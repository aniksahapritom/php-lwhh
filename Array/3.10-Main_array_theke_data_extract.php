<?php
$fruits = array('apple','banana','orange', 'plum', 'dates', 'mango');

// $some_fruits= array_slice($fruits, 2); //two number offset theke baki gulo dekhou

// $some_fruits= array_slice($fruits, 2,3); //two number offset theke 3 ta dekhou

// $some_fruits= array_slice($fruits, 2, 3, true); // offset er real number show koro

$some_fruits = array_slice($fruits, -4, -1);

// print_r($some_fruits);

//Form Associative array 

$randomData = ["a"=>'Minki',"b"=>'Pinky', 'c'=> 'alu', 11=>45 , "j"=> 'Potol'];
//print_r($randomData);  // here show 45 er offset is zero

// $random = array_slice($randomData, 2, true); // Show only two number offset value
$random = array_slice($randomData, 2, null, true); //from two to full array
print_r($random);
