<?php
function printN($i){
    if($i>100){
        return;
    }
    echo $i.PHP_EOL;
    $i+=7;
    printN($i);
}
printN(0);