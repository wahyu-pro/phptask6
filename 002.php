<?php

// pure function
// function SnakeCase($input)
// {
//     $input = explode(" ",$input);
//     $snakeCase = join("_", $input);
//     return $snakeCase;

// }

// $hello = SnakeCase("hello world again");
// echo $hello;

// closure
$hello = function($input){
    $input = explode(" ",$input);
    $snakeCase = join("_", $input);
    return $snakeCase;
};

echo call_user_func($hello, "hello world again");