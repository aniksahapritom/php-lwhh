<?php
$fruits=['pineapple','b'=>'banana','apple','jackfruit','mango','dates'];
$numbers=[51,57,2,9,25,4,88,100,28,74,25,26,3,1,74,5,98,25,45,54,62,73];

if(in_array(25,$numbers)){ //findout any value in array
    echo "25 is found".PHP_EOL;
}
$offset= array_search(25,$numbers);  //findout offset number
echo $offset.PHP_EOL; //Only show the fist postion if use this value some times.

if(key_exists('b',$fruits)){ //findout any key
    echo "Key b exists";
}