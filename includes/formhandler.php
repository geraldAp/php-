<?php
// var_dump(($_SERVER["REQUEST_METHOD"]));


// checking to see if data has been submitted to this page 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]); //to prevent injection of code into your app this converts this to html entities 
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);


    if(empty($firstname) || empty($lastname) || empty($favoritepet)){
        exit();
        // header("Location: ../index.php");
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;

    // sending the user back to a front page 
    header("location ../index.php");
} else {
    header("location ../index.php");
}
