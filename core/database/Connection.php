<?php

/**
 * Constructs database PDO connection
 *
 * @author Muhammed Alsaied
 */

namespace core\database;
use PDO;
class Connection {

    private static $connection = null;

    //singleton design pattern
    public static function make(): PDO {
        if (self::$connection == null) {
            try {
                self::$connection = new PDO("{$_ENV['DB_CONNECTION']}:"
                        . "host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}"
                        , $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']
                        , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            } catch (Exception $ex) {
                dd($ex->getMessage());
            }
        }
        return self::$connection;
    }

    // make the constructor private
    private function __construct() {
        
    }

}
