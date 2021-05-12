<?php
class Product
{
  // attributi
  public $name;
  public $ID;
  public $price;
  public $description;

  // costruttore
  public function __construct($_name, $_ID, $_price, $_description) {
    $this->name = $_name;
    $this->ID = $_ID;
    $this->price = $_price;
    $this->description = $_description;
  }

}

$libro = new Product("Il Codice da Vinci", 2345676, 9.90, "Un mistero che potrebbe scuotere le fondamenta del Cristianesimo si cela tra le opere di Leonardo. Il professore Langdon parte alla ricerca della scomoda verità assieme ad una criptologa francese.");
