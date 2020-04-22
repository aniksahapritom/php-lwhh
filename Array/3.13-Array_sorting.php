<?php
$fruits=['banana','apple','Apple','plum','jackfruit','pineapple','Banana','dates'];
$numbers=['13','2','55','15','77','84','14','19','26'];

//sort ==>>  sort, asort, rsort, arsort, ksort, krsort

// sort($fruits); //Sorting data by ASCII key 
// asort($fruits); //Sorting data by ASCII key 
// rsort($fruits); //reverse of sort

// arsort($fruits); //reverse of sort but key value will be same
// ksort($fruits); //key number sorting
// krsort($fruits); 
sort($fruits, SORT_STRING | SORT_FLAG_CASE);
sort($numbers);
print_r($numbers);
sort($numbers, SORT_STRING);


print_r($fruits);
print_r($numbers);