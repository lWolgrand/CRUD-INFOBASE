<?php

namespace Server\Database;

require __DIR__."/vendor/autoload.php";

use \PDO;
use \PDOException;

class Database{

    
    private static $connection;

    public function __construct(){
        $connection = DataBaseConnection::connect();
        
    }

    public static function save($tableName, $contact){

        $collums = array_keys($contact);
        $binds = array_pad([], count($collums), "?");
        $query = "INSERT INTO ".$tableName." (".implode(" , ", $collums).") VALUES (".implode(" , ", $binds)." )";
        try {
           return self::$connection->prepare($query)->execute(array_values($contact));
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    public static function listar()
    {
        $connection = DataBaseConnection::getInstance();
        $stmt    = $connection->prepare("SELECT * FROM contact;");
        $result  = array();//args?
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Contato::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

}



?>