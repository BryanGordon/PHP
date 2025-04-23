<?php
declare(strict_types=1);

class SuperHero {
  readonly public string $name; // Permite que no se pueda modificar 
  private array $powers;
  public string $planet;
  public int $strength;

  public function __construct($name, $powers, $planet)
  {
    $this->name = $name;
    $this->powers = $powers;
    $this->planet = $planet;
    $this->strength = 99;
  }

  // Solo apartir de php 8 se puede hacer el constructor
  // de esta manera.
  // Se llama promoted properties y no hace falta
  // instanciar las propiedades antes.
  /*
  public function __construct(
    public $name,
    public $powers,
    public $planet
  )
  {
    
  }
  */

  public function Attack() {
    return "$this -> name ataca con sus poderes";
  }

  public function description() {
    $powers = implode(", ", $this->powers);
    return "$this->name viene del planeta $this->planet y  tiene los siguientes poderes: $powers";
  }

}

$hero = new SuperHero("Batman", ["Fuerza", "Inteligencia", "Tecnologia"], "Gotham");

echo $hero->description();

?>