<?php
namespace Model;
//criação de classe
class Game
{

    public $name;
    public $plataforma ;
    public $launch ;
    public $price;
    
    public function __construct($game)
    {
      $this->name = $game["name"];
      $this->plataforma = $game["plataforma"];
      $this->launch = $game["launch"];
      $this->price = $game["price"];

    }
}
