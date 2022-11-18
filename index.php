<!doctype html>

<html>
<head>
<title>PHP Tutorial File Scripts</title>
<h2> 임훈택's PHP Tutorial Scripts Home </h2>

<!-- HTML Link Colors Style of CSS -->
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h3>The select display order defines a drop-down list:</h3>
    <!-- html form select <br/> -->
    <form method="post">
    <label for="order">Choose a sorting order:</label>
    <select id="order" name="order">
        <option value = 0>Ascending</option>
        <option value = 1 selected>Descending</option>
    </select>
    <input type="submit" />
    </form> 

    
<?php
// current working directory (apache server's home directory)
$dir = getcwd();
echo "<h3>Current Working Directory: $dir</h3>";
// initial sorting order desending variables input
$order = 1;
// html form input data transfer to PHP variables
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order = $_POST['order'];
  }

// echo "<br>";
$files = scandir($dir, $order); // 1 option descending order
 
foreach ($files as $file) {
    $files_tag .= '<a href="'.$file. '"> Go To ' .$file.'<a/><br>';
}
echo $files_tag;
 
?>
</body>
</html>
