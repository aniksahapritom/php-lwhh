<?php
$default_lag=23.5;

$user_lag=12.5;

$lang= $user_lag ?? $default_lag;   //Null cullus operator for php 7 ==>   first condition  ?? last condition 
//if first condition is valied then output will be first if not then second will be output

echo $lang;