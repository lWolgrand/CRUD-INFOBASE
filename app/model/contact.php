<?php
namespace Model;
//criação de classe
class Contact
{

    public $name;
    public $email ;
    public $cell ;
    
    
    public function __construct($contact)
    {
      $this->name = $contact["name"];      
      $this->launch = $contact["launch"];
      $this->price = $contact["price"];

    }
}
