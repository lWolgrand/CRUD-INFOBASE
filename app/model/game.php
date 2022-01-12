<?php
namespace App\Model;
//criação de classe
class Game
{

    public $name;
    public $plataforma ;
    public $launch ;
    public $price;
    
    public function __construct($name, $plataforma, $launch, $price)
    {
      $this->name = $name;
      $this->plataforma = $plataforma;
      $this->launch = $launch;
      $this->price = $price;

    }
}
