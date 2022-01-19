<?php

require __DIR__."/vendor/autoload.php";
use App\Model\Game;

// $games = [];

// $games[0] = new Game("GTA","PS2","10/10/2005",25);
// $games[1] = new Game("Gow","PS2","10/10/2005",30);
// $games[2] = new Game("Black","PS2","10/10/2006",30);
// $games[3] = new Game("Battlefield","PS2","10/10/2007",30);


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>Nome</th>
            <th>Plataforma</th>
            <th>Lançamento</th>
            <th>Preço</th>
        </tr> 

        <?php foreach($games as $game) { 
            echo "<tr>";
            echo "<th>".$game->name."</th>";
            echo "<th>".$game->plataforma."</th>";
            echo "<th>".$game->launch."</th>";
            echo "<th>".$game->price."</th>";
            echo "</tr>" ;
        }               
        
        ?>
    </table>
    
</body>
</html>