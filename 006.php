<?php

// pure function
// function cut($arg1, $arg2 = 10, $arg3 = "..."){
//     $result = substr($arg1, 0, $arg2).$arg3;
//     return $result;
// }

// $Trim = cut("ini adalah tulisan yang sangat panjang",8);
// echo $Trim;

// closure
$trimWord = function($arg1, $arg2){
    $result = substr($arg1, 0, $arg2)."...";
    return $result;
};

echo call_user_func($trimWord, "ini adalah tulisan yang sangat panjang",8);