<?php 

// Scalar type 
$string = "Daniel";
$int = 0;
$float = 2.5678;
$bool = true;

// Array type 
$array_old = array('hi','I','am','Gerald'); // older versions
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]; // new version

// Object type 
// $object = new Car()

// Inbuilt var (super globals) can be accessed anywhere in the code 
echo "\n"; // Adding a new line
echo $_SERVER['DOCUMENT_ROOT']; // Gives the root path 
echo "\n"; // Adding a new line
echo $_SERVER['PHP_SELF'];
echo "\n"; // Adding a new line
echo 'Hiiiiiiii';

// Get method 
$_GET['name'];
// Post method 
// $_POST[]

//Request Method 
$_REQUEST[""]; // ideally don't use this 

// accessing and getting files 
$_FILES["name"];

// cookie / store or grab information about cookies 