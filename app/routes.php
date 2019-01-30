<?php
use core\Router;
/**
 * Defining different routes
 *
 * @author Muhammed Alsaied
 */
Router::GET([
    "" => "HomeController@index",
    "about" => "AboutController@index",
    "contact" => "ContactController@index",
    "test" => "TestController@index",
]);
