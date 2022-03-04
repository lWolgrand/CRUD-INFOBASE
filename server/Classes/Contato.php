<?php
namespace Server\Classes;

/**
 * Class Contato
 * @package Server\Classes
 */
class Contato
{
    public string $nome;
    public string $email;
    public int $telefone;


    public function __construct(string $nome, string $email, int $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    
    

}

