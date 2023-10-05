<?php

function whoami() {
    $name = isset($_POST["name"]) && !empty($_POST['name']) ? $_POST['name'] : null;
    $age = isset($_POST["age"]) && !empty($_POST['age']) && is_numeric($_POST['age']) ? $_POST['age'] : null;

    $res = '';

    if ($name && $age) {
        $res = "Hi, my name is $name and I'm $age years old.";
    } else if ($name && !$age) {
        $res = "Hi, my name is $name.";
    } else if (!$name && $age) {
        $res = "Hi, I have no name and I'm $age years old.";
    } else {
        $res = "Hi, I have no name.";
    }

    echo $res;
}