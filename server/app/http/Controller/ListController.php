<?php
namespace App\Http\Controller;

/**
 * Class ListController
 * @package App\Http\Controller
 */

class ListController
{
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