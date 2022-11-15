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

foreach ($files as $file) {
    files_tag .= '$file;
    echo "<br>";
    // echo "<a href=" $file ">Go to " $file "</a><br/>"
} 


?>