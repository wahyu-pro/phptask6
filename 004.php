<?php

function Mode($numbers){
    $value = implode(" ",$numbers);
    $value = explode(" ", $value);
    $count = array_count_values($value);
    $output = array_search(max($count), $count);
    return $output;
}

$numbers = [1,2,3,4,5,6,6,8,8,6,9];
$grades = [87.5, 88.5, 60.5, 90.5, 88.5];
echo Mode($numbers)."\n";
echo Mode($grades);