<?php

function form_is_submitted() {
    return isset($_POST['submit']);
}

function whoami()
{
    $name = isset($_POST["name"]) && !empty($_POST['name']) ? $_POST['name'] : null;
    $age = isset($_POST["age"]) && !empty($_POST['age']) && is_numeric($_POST['age']) ? $_POST['age'] : null;

    $curriculum = isset($_POST["curriculum"]) ? $_POST["curriculum"] : null;

    $res = '';

    if ($name && $age) {
        $res = "Hi, my name is $name and I'm $age years old.";
    } else if ($name && !$age) {
        $res = "Hi, my name is $name.";
    } else if (!$name && $age) {
        $res = "Hi, I have no name and I'm $age years old.";
    } else {
        $res = "Hi, i'm anonymous.";
    }

    if ($curriculum !== '') {
        $res .= " I'm a student of $curriculum.";
    }

    echo $res;
}