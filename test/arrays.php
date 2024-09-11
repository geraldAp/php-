<?php
// Arrays 
$fruits = ["Apple", "Banana", "Orange", "Grapes", "Pineapple"];

echo $fruits[0] . "\n";
// adding to the array
$fruits[] = 'Paw paw';

print_r($fruits) . "\n";

$fruits[1] = 'Pear';
print_r($fruits);

// unset($fruits[0]); //removes the element at this index but does not clear the index  a better approach is below 

array_splice($fruits, 0, 1); // 
print_r($fruits) . "\n";

// creating different types of keys using associative arrays apparently phps version of objects I guess 
$tasks = [
    "laundry" => "Daniel",
    "dishes" => "Frida",
    "trash" => "Bella"
];

echo $tasks['laundry'] . "\n";
print_r($tasks);

echo count($tasks);

sort($fruits);

array_push($fruits, "mango");

$tasks['dusting'] = "Chris";

array_splice($fruits, 1, 0, 'cherry'); //insert
print_r($fruits);
array_splice($fruits, 1,1 , 'kiwi'); //replace  
print_r($fruits);

// multidimensional array aka associative array aka objects 
$food = [
    "Fruits" => [
        "Citrus" => ["Orange", "Lemon", "Lime"],
        "Berries" => ["Strawberry", "Blueberry", "Raspberry"],
        "Tropical" => ["Mango", "Pineapple", "Banana"]
    ],
    "Vegetables" => [
        "Leafy" => ["Spinach", "Lettuce", "Kale"],
        "Root" => ["Carrot", "Beetroot", "Potato"],
        "Cruciferous" => ["Broccoli", "Cauliflower", "Cabbage"]
    ],
    "Meat" => [
        "Poultry" => ["Chicken", "Turkey", "Duck"],
        "Red Meat" => ["Beef", "Lamb", "Pork"],
        "Seafood" => ["Salmon", "Shrimp", "Tuna"]
    ],
    "Dairy" => [
        "Milk" => ["Whole Milk", "Skim Milk", "Almond Milk"],
        "Cheese" => ["Cheddar", "Mozzarella", "Parmesan"],
        "Yogurt" => ["Greek Yogurt", "Regular Yogurt", "Flavored Yogurt"]
    ]
];

print_r($food);
