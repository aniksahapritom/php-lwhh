<?php
$name = 0;

if(isset($name)){
    echo 'Name is Set';
}else{
    echo 'Not set';
}
echo PHP_EOL;
if(empty($name0)){
    echo 'Name is empty';
}else{
    echo 'Not empty';
}
echo PHP_EOL;
if(isset($name) && (is_numeric($name) || $name !='')){  //we try to check by this function..
    echo 'Name is set and it is not empty';
}else{
   echo "Name is either not set or it's empty";
}