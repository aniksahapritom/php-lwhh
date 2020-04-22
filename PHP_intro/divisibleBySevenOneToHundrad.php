<?php
$n=13;
for($i=1; $i<=100; $i++){
    if($i%$n==0){
        echo "Divisible by {$n} from 1 to 100 number is {$i}".PHP_EOL;
    }
}