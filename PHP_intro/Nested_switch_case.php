<?php

$n =-11;
$r = $n % 2;

//Nested switch case start simple
switch($r){
    case 0:
        switch($n){
            case $n > 0:
                echo "{$n} is positive even number\n";
            break;
            case $n < 0:
                echo "{$n} is negative even number\n";
            break;
        }
    break;

    default:
        switch($n){
        case $n > 0:
            echo "{$n} is positive odd number\n";
        break;
        case $n < 0:
            echo "{$n} is negative odd number\n";
        break;
    }
}

//Nested switch case end
//Nested switch case start for more readability

switch(true){
    case (0 == $r && $n > 0):
       echo "{$n} is positive even number";
    break;
    case (0 == $r && $n < 0):
        echo "{$n} is negative even number";
    break;
    case (1 == $r && $n > 0):
       echo "{$n} is positive odd number";
    break;
    case (-1 == $r && $n < 0):
        echo "{$n} is negative odd number";
     break;
}

