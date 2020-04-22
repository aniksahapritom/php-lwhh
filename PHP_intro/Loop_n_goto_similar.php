<?php

echo "Go to\n";
$i=0;
a : $i++;
echo $i.PHP_EOL;
if($i<10) goto a;

echo PHP_EOL;
echo "For loop\n";
for($i=0; $i<10; $i++){
    echo $i.PHP_EOL;
}
echo PHP_EOL;
echo "While loop\n";
$i = 0;
while ($i<10){
    $i++;
    echo $i.PHP_EOL;
}

echo PHP_EOL;
echo "Do While loop\n";

$i = 0;
do{$i++;
    echo $i.PHP_EOL;
}while($i<10);