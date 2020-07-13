<?php

// pure function
// function Capitalize($input){
//     return ucwords($input);
// }

// $capitalize = Capitalize('hello world again');
// echo $capitalize;

// closure
$capitalize = function($input){
    return ucwords($input);
};

echo call_user_func($capitalize, "hello world again");