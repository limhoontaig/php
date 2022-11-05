<!doctype html>

<html>
 <head>
 <title>A File Upload Script</title>
 </head>
 <?php
  echo "Hello PHP<br/>";
  $a = 1; // 정수 int
  $b = 2; // 정수 int
  $c = $a + $b; // 정수 계산
  $d = 3.14; // 실수 float
  $e = "hi"; // 문자열 string
  $f = 'hello'; // 문자열 string
  $g = array(1,2,3,4); // 배열 array
  $h = array('a'=>1, 'b'=> 2); // 연관배열 associative array

  var_dump($a);echo "<br/>";
  echo "\$a의 값은 $a 입니다.<br/>";
  var_dump($b);echo "<br />";
  var_dump($c);echo "<br />";
  var_dump($d);echo "<br />";
  var_dump($e);echo "<br />";
  var_dump($f);echo "<br />";
  var_dump($g);echo "<br />";
  var_dump($h);echo "<br />";
  var_dump($b * $d * $d, $g);"<br/>";

  arraysample();

  phpinfo();
 ?>

</html>