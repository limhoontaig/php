<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  } 
  function __destruct() {
    echo "<br><br><h2>Run function destruct()</h2> {$this->name}, {$this->color}.</h2>";
  }
}

$apple = new Fruit("Apple", "Red");
echo "<h2>Run function construct()</h2>";
echo "This fruit name is {$apple->get_name()}.";
echo "<br>";
echo "This fruit color is {$apple->get_color()}.";
?>
 
</body>
</html>