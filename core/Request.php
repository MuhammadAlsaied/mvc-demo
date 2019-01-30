<?php
namespace core;

/**
 * Defining current HTTP Request
 *
 * @author Muhammed Alsaied
 */
class Request {

    /**
     * retutns uri path
     * @return String 
     */
    public static function uri(): String {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");
    }

    /**
     * return the HTTP method for current request e.g. 'POST', 'GET' etc...
     * @return String 
     */
    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }

}
