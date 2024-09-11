<?php
//Control structures    

// If Statements
$bool = true;
$a = 1;
$b = 2;

if ($a < $b && !$bool) {
    echo "First condition is true\n";
} else if ($a < $b && $bool) {
    echo "Second condition is true\n";
} else {
    echo "None of these conditions are true\n";
}


// Switch
switch (true) {
    case ($a < $b && !$bool):
        echo "First condition is true\n";
        break;
    case ($a < $b && $bool):
        echo "Second condition is true\n";
        break;
    default:
        echo "None of these conditions are true\n";
}


// Match 
$result = match ($a) {
    1 => "var is equal to 1",
    2 => "var is equal to 2",
    3 => "var is equal to 3",
    4, 5, 6 => "var is equal to a number greater than 3",
    default => "None where a match"
};

$role = 'admin';

$access = match ($role) {
    'admin' => 'Full access',
    'editor' => 'Edit access',
    'viewer' => 'View access',
    default => 'No access',
};

echo $access . "\n"; // Output: Full access
echo $result . "\n";
