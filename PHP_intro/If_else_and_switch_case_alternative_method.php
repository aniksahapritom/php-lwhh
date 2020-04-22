<?php
$n = 1213;

if($n%2==0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo PHP_EOL;  // use for new line (php built in function)

//Start alternative if else method

if($n%2 ==0):
    echo "Number is even";
    echo PHP_EOL; //use for new line
    echo "Some text";
else: 
    echo "Number is odd";
    echo PHP_EOL;
    echo "some text++";
endif;


echo PHP_EOL;

//simillar switch case

// switch ($n%2==0):
//     case 0:
//     echo "Even Number from switch case";
//     break;
//     default:
//     echo "Odd Number from switch case";
// endswitch;
switch ($n %2 == 0):
    case 0:
        echo "Even Number from switch case";
    break;
    default:
        echo "Odd Number from switch case";
endswitch; 