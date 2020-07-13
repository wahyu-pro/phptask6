<?php
// pure function

// function TrimWords($arg1, $arg2, $arg3 = "..."){
//     $output = explode(" ", $arg1);
//     $output = array_slice($output, 0, $arg2);
//     return join(" ", $output). $arg3;
// }

// $Trim = TrimWords("ini adalah tulisan yang sangat panjang",3);
// echo $Trim;

// Closure
$trimWords = function($arg1, $arg2){
    $output = explode(" ", $arg1);
    $output = array_slice($output, 0, $arg2);
    return join(" ", $output). "...";
};

echo call_user_func($trimWords, "ini adalah tulisan yang sangat panjang",3);
