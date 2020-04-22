<?php

doLargeTask(); //call the function( Any where we can place it)

function doTaskA(){
    echo "Step A Done".PHP_EOL;
}

function doTaskB(){
    echo "Step B Done".PHP_EOL;
}
function doTaskC(){
    echo "Step C Done".PHP_EOL;
}
function doTaskD(){
    echo "Step D Done".PHP_EOL;
}
function doTaskE(){
    echo "Step E Done".PHP_EOL;
}

function doLargeTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

