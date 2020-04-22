<?php

$n = 12;
$r = $n % 2;

switch ($r){
    case 0:
        echo "{$n} is even number\n";
    break;
    default:
        echo "{$n} is odd number\n";
}


$color= "blue";

switch ($color){
  /*  case 'red':
        echo "red is my favorite color";
    break;
    case 'green':
        echo "green is my favorite color";
    break; */


    // We can combine condition in switch case
    case 'red':
    case 'green':  // We can use colon (:) or semicolon (;) in Switch Case.
        echo ucwords($color)." is the favorite color";  //ucwords use for first letter upper case 
    break;
    case 'blue':
        echo "Blue is not my favorite color";
    break;
    default:
        echo "Color is OK";
}