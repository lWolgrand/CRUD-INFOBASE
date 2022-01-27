<?php
namespace App\Controller;
use App\Database\Database;
use App\Model\Game;



class Save{
    
    public static function saveGame(){        
        
       
        $game = new Game($_POST);
        print_r($game);

}

}


?>