<?php

namespace App\Model;

class ContactModel
{
	/**
	 * @var integer
	 */
    public integer $contact_id;
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

	public function __construct($contact_id, $name, $email, $telefone){

		$this->id = $contact_id;
		$this->name = $name;
		$this->email = $email;
		$this->telefone = $telefone;
		
    }


}