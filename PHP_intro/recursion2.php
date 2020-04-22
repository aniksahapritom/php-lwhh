<?php 
function printNumber($counter, $end, $stepping=1){
    if($counter>$end){
        return;
    }
    echo $counter.PHP_EOL;
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}

printNumber(12,30, 5);