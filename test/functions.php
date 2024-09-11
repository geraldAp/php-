<?php
declare(strict_types=1);
// creating a function

// when you want to mae it strongly typed remember to add the declare(strict_types=1) flag at the top  
function sayHello( string $name = "Person"){
    return "Hello" . " " . $name;
}

function calculator (int $a , int $b){
    return $a + $b;
}

echo sayHello() . "\n";
echo calculator(0,0) ."";