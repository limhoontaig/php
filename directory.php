<!doctype html>

<body>
 
 <h1>The select display order</h1>
    <h3>The select element defines a drop-down list:</h3>
 <!-- html form select <br/> -->
    <form method="post">
    <label for="order">Choose a sorting order:</label>
    <select id="order" name="order">
        <option value = 0>Ascending</option>
        <option value = 1>Descending</option>
    </select>
    <input type="submit" />
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $order = $_POST['order'];
  // $age = $_POST['age'];
}

$dir = getcwd();
echo "<h3>현재의 디렉토리 Current Directory: $dir</h3>";
// echo "<br>";
$files = scandir($dir, $order); // 1 option descending order

foreach ($files as $file) {
    $files_tag .= '<a href="'.$file. '"> Go To ' .$file.'<a/><br>';
}
echo $files_tag;
// print_r($files_tag);
?>