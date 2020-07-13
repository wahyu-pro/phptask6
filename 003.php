<?php
// pure function

// function KebabCase($input)
// {
//     $input = explode(" ",$input);
//     $kebabCase = join("-", $input);
//     return $kebabCase;

// }

// $hello = KebabCase("hello world again");
// echo $hello;

// closure
$hello = function($input){
    $input = explode(" ",$input);
    $kebabCase = join("-", $input);
    return $kebabCase;
};

echo call_user_func($hello, "hello world again");