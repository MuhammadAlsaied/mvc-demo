<?php

/**
 * Making queries to database
 *
 * @author Muhammed Alsaied
 */

namespace core\database;

class QueryBuilder {

    private $connection;

    /**
     * instantiate QueryBuilder instance
     * 
     * @return void
     */
    public function __construct() {
        $this->connection = Connection::make();
    }

    /**
     * get all records from database
     * 
     * @param String $table a string specifies table name in the database
     * 
     * @return array() returns an array of all records in the database
     */
    public function all(String $table): array {
        $statement = $this->connection->prepare("select * from {$table}");
        $statement->execute();
        return$statement->fetchAll(\PDO::FETCH_CLASS);
    }

}
