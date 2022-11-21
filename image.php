<!doctype html>
<head>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <style>
        img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>The select display pictures</h1>
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

// $dir = "/home/limht/ftp/files";
$dir="./files";
echo "<h3>현재의 디렉토리 Current Directory: $dir</h3>";
// echo "<br>";
$files = scandir($dir, $order); // 1 option descending order
// print_r("<h1> test</h1>");
print_r($files);
echo count($files);
// echo "oooo" ;
// echo "-----";
foreach ($files as $file) {
    $files_tag .= '<a href="'.$dir.'/'.$file. '"> Go To ' .$dir.'/'.$file.'<a/><br>';
    $files_tag .= '<img src="'.$dir.'/'.$file.'" alt="items to supply">';
}
echo $files_tag;
// print_r($files_tag);
?>
    <a href="index.php">Go To index.php</a><br>
    <a href="directory.php">Go To directory.php</a><br>
    <figure>
    <h2>Column</h2>
        <img src="./files/20220921_075306.jpg" alt="Items to Supply">
        <figcaption>
            Warning plate
        </figcaption>
        <img src="honda.jpg" alt="Girl with a jacket">
        <figcaption>
            Warning plate
        </figcaption>
        <img src="aran.jpg" alt="Bird on the fly">
        <figcaption>
            Bird on the fly
        </figcaption>
    </figure>
    

</body>

