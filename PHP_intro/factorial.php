<?php
$n = 20;
for($factorial=1, $i=1; $i<=$n; $i++){ //productive method writting
    $factorial *= $i;
    echo "Factorial of {$i} is {$factorial}".PHP_EOL;
}