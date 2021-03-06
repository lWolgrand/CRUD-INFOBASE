<?php

namespace App\Model;

class ContactModel
{
	/**
	 * @var int
	 */
    public int $contact_id;
	/**
	 * @var string
	 */
	public string $name;
	/**
	 * @var string
	 */
	public string $email;
	/**
	 * @var string
	 */
	public string $telefone;

	public function __construct($name, $email, $telefone){
		
		$this->name = htmlspecialchars($name);
		$this->email = htmlspecialchars($email);
		$this->telefone = htmlspecialchars($telefone);
		
    }


}