<?php


use App\Controller\Save;
if(isset($_POST)){
        
   Save::saveGame($_POST);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <!-- //$name, $plataforma, $launch, $price -->
    <form  method="POST">
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" name="nome">
        </div>

        <div>
            <label for="plataforma">Plataforma</label>
            <input type="text" id="plataforma" name="plataforma">
        </div>

        <div>
            <label for="launch">Launch</label>
            <input type="text" id="launch" name="launch">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
        </div>

        <div>
            <input type="submit" value="enviar">


        </div>
    </form>
    
</body>
</html>