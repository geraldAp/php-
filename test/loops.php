<?php 
// do while loop

$i = 1;
do {
    echo "The value is $i <br>";
    $i++;
} while ($i <= 5);

// while 
while ($i <= 5) {
    echo "The value is $i <br>";
    $i++;
}
// for loop
for ($i = 1; $i <= 5; $i++) {
    echo "The value is $i <br>";
}

//  for each loop
$fruits = ["Apple", "Banana", "Orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$person = ["name" => "John", "age" => 30, "city" => "New York"];

foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}
