<!doctype html>
<html>
 <head>
 <title>Including another php file</title>
 </head>
<?php
    echo "Hello";
    require("before.php");
    // $var = "abcd after.php";
    echo "This is main page: ";
    echo $var; echo "<br/>";

    require_once("after.php");
?>
</html>