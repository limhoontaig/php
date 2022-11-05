<!doctype html>

<html>
 <head>
 <title>A File Upload Script</title>
 </head>

<form method="post">
    name : <input type="text" name="name" />
    age : <input type="text" name="age" />
    <input type="submit" />
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "name is $name, age is $age";
}
?>
</html>