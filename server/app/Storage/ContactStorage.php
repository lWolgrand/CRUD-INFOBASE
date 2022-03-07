<?php

namespace App\Storage;
use App\Model\ContactModel;

use \PDO;
use \PDOException;

class ContactStorage{

    
    private static $connection;
    private const TABLENAME = 'contact';

    public function __construct(){
        self::$connection = DataBaseConnection::connect();
        
    }

    public function save(ContactModel $contact){

        $query = "INSERT INTO ".self::TABLENAME."(name, email, telefone) VALUES (?, ?, ?)";
        try {
           return self::$connection->prepare($query)->execute(array($contact->name, $contact->email, $contact->telefone));
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    public function getAll(){   

        $stmt = self::$connection->query(" SELECT * FROM ".self::TABLENAME);       
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'ContactModel');
        return $stmt->fetchAll();       
    }

    public function delete(ContactModel $id){

        $query = "DELETE FROM contact WHERE id = :id";
        $this->execute($query);
        return true;


    }

}



?>