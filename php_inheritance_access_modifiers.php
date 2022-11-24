<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
echo "<br>In this example we see that if we try to call a protected method (intro()) from outside the class, we will receive an error. public methods will work fine!";
$strawberry->intro(); // ERROR. intro() is protected
?>
 
</body>
</html>