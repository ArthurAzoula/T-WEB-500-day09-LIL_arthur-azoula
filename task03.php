<?php


function dynamic_body() {
    $page = $_GET['page'];
    if (file_exists($page . ".html")) {
        return file_get_contents($page . ".html");
    } else {
        return "<p>Unknown page</p>";
    }
}