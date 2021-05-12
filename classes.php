<?php
class Product {
  // attributi
  public $name;
  protected $discount = 0;
  public $price;
  public $description;

  // costruttore
  public function __construct($_name, $_discount, $_price, $_description) {
    $this->name = $_name;
    $this->discount = $_discount;
    $this->price = $_price;
    $this->description = $_description;
  }

  // metodi
  public function getDiscount() {
    return $this->discount;
  }
}

class Book extends Product {
  // attributi
  public $pages;
  public $edition;

  // costruttore
  public function __construct($_name, $_discount, $_price, $_description, $_pages, $_edition) {
    parent::__construct($_name, $_discount, $_price, $_description);
    $this->pages = $_pages;
    $this->edition = $_edition;
  }

  // metodi
  public function getDiscount() {
    return $this->discount + 10;
  }
}

class DVD extends Product {
  // attributi
  public $runningTime;
  public $numberOfDisks;

  // costruttore
  public function __construct($_name, $_discount, $_price, $_description, $_runningTime, $_numberOfDisks) {
    parent::__construct($_name, $_discount, $_price, $_description);
    $this->runningTime = $_runningTime;
    $this->numberOfDisks = $_numberOfDisks;
  }

  // metodi
  public function getDiscount() {
    return $this->discount + 20;
  }
}

$libro = new Book("Il Codice da Vinci", 0, 9.90, "Un mistero che potrebbe scuotere le fondamenta del Cristianesimo si cela tra le opere di Leonardo. Il professore Langdon parte alla ricerca della scomoda verità assieme ad una criptologa francese.", 689, "quinta");
$DVD1 = new DVD("The Prestige", 10, 7.99, "La rivalità tra due illusionisti nell'epoca vittoriana non si ferma davanti a nulla. Nella loro battaglia per scoprire l'uno i segreti dell'altro contrappongono audacia e desiderio, abilità nell'intrattenere il pubblico e scienza, ambizione e amicizia, con risultati pericolosi e mortali.", 135, 1);
