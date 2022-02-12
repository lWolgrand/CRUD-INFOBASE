<?php
try {
 
    $stmt = $conexao->prepare("SELECT * FROM contatos");
 
        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>".$rs->nome."</td><td>".$rs->email."</td><td>".$rs->celular
                           ."</td><td><center><a href=\"\">[Alterar]</a>"
                           ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                           ."<a href=\"\">[Excluir]</a></center></td>";
                echo "</tr>";
            }
        } else {
            echo "Erro";
        }
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
?>