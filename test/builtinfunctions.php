<?php

$string = "Hello world";
echo strlen($string);
echo strpos($string, "o");
echo str_replace("world!", "daniel", $string);
echo strlen($string);
echo strtolower($string);
echo substr($string, 0, 1); // showing certaing parts of the str
echo substr($string, 0, -1); // showing certain parts of the str subtracting the end 
print_r(explode(" ", $string)); //  The explode function in PHP splits a string into an array of substrings 


//  Math functions 
$number = -5.5;

echo abs($number); // gives us the absolute value whether - or not it will in this case just give us 5
echo pow(10, $number); // power 

echo rand(1, 100); // random numbers from 1 to this 



// array functions 
$fruits = ["Apple", "Banana", "Orange", "Grapes", "Pineapple"];

echo count($fruits);
echo is_array($fruits) ? "this is an array" : "this is not an array";
print_r($fruits); // prints the elements in the array
array_pop($fruits); // takes the last element of the array out 
print_r(array_reverse($fruits));
print_r(array_merge($fruits, ['papaya', 'guava']));

// data time function 
$date = date("Y-m-d H:i:s");
echo strtotime($date);
