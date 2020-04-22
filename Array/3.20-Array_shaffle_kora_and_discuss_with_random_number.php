<?php
$number= range(42,70);
// print_r($number);
$random= mt_rand(0,28);
$randdomNum1=$number[$random];
echo $randdomNum1;
echo "\n";
$random= mt_rand(0,28);
$randdomNum2=$number[$random];
echo $randdomNum2.PHP_EOL;

if($randdomNum1==$randdomNum2){
    echo "Congrats!!\nYou are lucky";
}else{
    echo "Ohh, No! Unfortunatly you are unlucky";
}

