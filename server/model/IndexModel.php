<?php

namespace Server\Model;

class IndexModell
{
    function adicionar($nome, $email, $telefone) {

		$stmt = $this -> connection -> db -> prepare("INSERT INTO contact(nome, email, telefone) VALUES (?,?,?,?,?)");
		$stmt -> bind_param("sssss", $nome, $email, $telefone);
		if ($stmt -> execute()) {
			return TRUE;
		} else {
			return FALSE;

		}

	}
}