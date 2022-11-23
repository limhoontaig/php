<?php
// $username = posix_getpwuid(posix_geteuid())['name'];
// echo 'username ='.$username;
$file = "newfile.txt";
chmod($file, 0666);
$myfile = fopen($file, "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<h1>fopen with 'w' mode fwrite John and Jane in $file</i></h1>";
echo "<h2>initial create $file and read line by line with br tag per line</h2>";
$myfile = fopen($file, "r") or die ("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile)."<br>";
}
fclose($myfile);


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<h1>fopen with 'w' mode fwrite Mickey and Minne in $file</i></h1>";
echo "<h2>initial create $file and delete already stored John and Jane</h2>";
$myfile = fopen($file, "r") or die ("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile)."<br>";
}
fclose($myfile);


$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<h1>fopen with a mode </i></h1>";
echo "<h2>file read line by line with br tag per line</h2>";
$myfile = fopen($file, "r") or die ("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile)."<br>";
}
fclose($myfile);
?>