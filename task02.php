<?php 

function render_body($page) {

    return require ($page . '.php') ?: '<p>Unknown page</p>';
}