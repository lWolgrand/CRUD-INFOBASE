<?php

namespace App\Database;

use \PDO;
use \PDOException;

class Dbconnection{

    private static $host;
    private static $dbName;
    private static $user;
    private static $password;

    private static function init($host = "db", $dbName = "gameStorage", $user = "root", $password = "root"){

        self::$host = $host;
        self::$dbName = $dbName;
        self::$user = $user;
        self::$password = $password;


    }

    public static function connect(){
        self::init();
        $connection = NULL;
        try {
            $connection = new PDO("pgsql:host=".self::$host.";dbname=".self::$dbName, self::$user, self::$password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        } catch (PDOException $e) {
           $connection = $e->getMessage();
        }

        return $connection;

    }

}


?>