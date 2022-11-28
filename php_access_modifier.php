<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
echo "Fruit name is {$mango->name}.<br>";
echo "This file is a sampe program of protected and private access modifiers are not allowed outside class.";
/* 1try {
    $mango->set_color('Yellow'); // ERROR
} catch (Exception $e) {
    echo 'message: ' .$e->getmessage();
}
try {
    $mango->set_weight('300'); // ERROR
} catch (Exception $e) {
    echo 'message: ' .$e->getmessage();
}*/
?>