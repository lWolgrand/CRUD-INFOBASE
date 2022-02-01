<?php

namespace App\Database;

require __DIR__."/vendor/autoload.php";

use \PDO;
use \PDOException;

class Database{

    
    private static $connection;

    public function __construct(){
        $connection = DataBaseConnection::connect();
        
    }

    public static function save($tableName, $game){

        $collums = array_keys($game);
        $binds = array_pad([], count($collums), "?");
        $query = "INSERT INTO ".$tableName." (".implode(" , ", $collums).") VALUES (".implode(" , ", $binds)." )";
        try {
           return self::$connection->prepare($query)->execute(array_values($game));
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

}



?>