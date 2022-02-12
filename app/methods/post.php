<?php
// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $name = (isset($_POST["name"]) && $_POST["name"] != null) ? $_POST["name"] : "";
    $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
    $cell = (isset($_POST["cell"]) && $_POST["cell"] != null) ? $_POST["cell"] : NULL;
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $name = NULL;
    $email = NULL;
    $cell = NULL;
}
?>