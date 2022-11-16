<!doctype html>
<?php
$dir = getcwd();
echo $dir ."<br>";
$files = scandir($dir, 1); // 1 option descending order

foreach ($files as $file) {
    $files_tag .= '<a href="'.$file. '"> Go To ' .$file.'<a/><br>';
}
echo $files_tag;
?>