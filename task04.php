<?php

function whoami() {
    $name = $_POST["name"];
    $age = $_POST["age"];

    $isAgeValid = isset($age) && is_numeric($age);

    if(isset($name) && $isAgeValid) {
        echo "Hi, my name is $name and I'm $age years old.";
    } else if(isset($name)) {
        echo "Hi, my name is $name."; 
    } else if($isAgeValid) {
        echo "Hi, I have no name and I'm $age years old.";
    } else {
        echo "Hi, I have no name.";
    }
}