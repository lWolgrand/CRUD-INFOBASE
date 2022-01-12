<?php

namespace App\Database;

use \PDO;
use \PDOException;

class db{

    private static $tableName;
    private static $game;
    private static $connection;

    public function __construct($tableName, $game){
        $connection = Dbconnection::connect();
        self::$tableName = $tableName;
        self::$game = $game;
    }

    public static function save(){

        $collums = array_keys(self::$game);
        $binds = array_pad([], count($collums), "?");
        $query = "INSERT INTO ".self::$tableName." (".implode(" , ", $collums).") VALUES (".implode(" , ", $binds)." )";
        try {
           return self::$connection->prepare($query)->execute(array_values(self::$game));
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

}



?>