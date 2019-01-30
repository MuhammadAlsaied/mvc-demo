<?php

use core\View;

// introducing some helper functions

function dd($var) {
    echo '<pre>';
    echo var_dump($var);
    echo '</pre>';
    die();
}

function view($view_name) {
    return new View($view_name);
}
