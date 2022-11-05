<!doctype html>

<html>
 <head>
 <title>A File Upload Script</title>
 </head>

<?php
$data = "hi php world";
file_put_contents("data.txt", $data);

$load_data = file_get_contents('data.txt');

echo $load_data;
?>
</html>