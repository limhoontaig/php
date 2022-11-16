<!doctype html>
<?php
$dir = getcwd();
echo $dir ."<br>";
$files = array();
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            // echo "filename:".$file."<br>";
            array_push($files, $file);
        }
        closedir($dh);
        // print_r($files);
    }
}
rsort($files);
// $files_tag = array();
foreach ($files as $file) {
    $files_tag .= '<a href="'.$file. '"> Go To ' .$file.'<a/><br>';
    // echo "<br>";
    // echo "<a href=" $file ">Go to " $file "</a><br/>"
}
echo $files_tag;
?>

CODE;