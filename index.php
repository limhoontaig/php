<!doctype html>

<html>
 <head>
 <title>A File Upload Script</title>
 <h1> 임훈택의 시험 홈페이지 입니다. <br/> Hello PHP </h1>

<!-- HTML Link Colors Style of CSS -->
<link rel="stylesheet" href="styles.css">

 </head>
 <a href="arraysample.php">Go to array sample</a><br/>
 <a href="floatPropertyExample.html" target="_self">Go to Float Property Example</a><br/> 
 <a href="flexboxPropertyExample.html" target="_self">Go to Flexbox Property Example</a><br/>
 <a href="funcs.php" target="_self">Go to funcs.php</a><br/>
 <a href="get.php" target="_self">Go to get.php</a><br/>
 <a href="html_table.php" target="_self">Go to html_tble.php</a><br/>
 <a href="inc.php" target="_self">Go to inc.php</a><br/>
 <a href="json.php" target="_self">Go to json.php</a><br/>
 <a href="logic_operator.php" target="_self">Go to logic_operator.php</a><br/>
 <a href="loop.php" target="_self">Go to loop.php</a><br/>
 <a href="main.php" target="_self">Go to main.php</a><br/>
 
 <?php
  echo "Hello PHP <br/>";
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
