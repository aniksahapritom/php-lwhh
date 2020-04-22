<?php
    $student = [
        'fname' =>'Hello',
        'lname' =>'World'
    ];
    // print_r($student);

$person = &$student;
$student['lname']='Changed';

print_r($student);
print_r($person);

    