<?php
$stu = array(
    // define an array
    "Rahim",
    "Karim",
    456,
    "Minto",
) ;
var_dump($stu);
echo $stu[1];


$students = [ // define an array
    "Rahim",
    "Karim",
    456,
    "Minto",

];

echo $students[2].PHP_EOL; // for only use specific position find out value from array

echo "============".PHP_EOL;


// for loop use for showing all value from array
$n = count($students);
for($i=0; $i<$n; $i++ ){
    echo $students[$i].PHP_EOL;
}

echo "============".PHP_EOL;

// Reversely showing this output by for loop

for($i=$n-1; $i >= 0; $i-- ){
    echo $students[$i].PHP_EOL;
}