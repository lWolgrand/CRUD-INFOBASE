<?php if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $name != "") {
    try {
        $stmt = $conexao->prepare("INSERT INTO contatos (name, email, cell) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $cell);
         
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Data saved sucessfully";
                $id = null;
                $nome = null;
                $email = null;
                $cell = null;
            } else {
                echo "Error";
            }
        } else {
               throw new PDOException("Error");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}

?>