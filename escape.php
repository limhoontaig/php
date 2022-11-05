<!doctype html>

<html?>
 <head>
 <title>A File Upload Script</title>
 </head>

<?php

$html = <<<CDATA
A 'quote' is <b>bold</b> "한글" 데이터
CDATA;
$encode = htmlspecialchars($html);
echo $encode;echo PHP_EOL;
echo "<br>";

$decode = htmlspecialchars_decode($encode);
echo $decode;
?>
</html>