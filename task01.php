<?php

function display_menu() {
    return <<<HTML
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>  
        </ul>
    
    HTML;
}