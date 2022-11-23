<!doctype html>
<html>
    <body>
        <?php
        $file = "index.txt";
        echo "<h1>fopen(<i>filename, 'mode'</i>)</h1>";
        echo "<h2>fread(<i>filename</i>, filesize(<i>filename</i>)')</h1>";
        $myfile = fopen($file, "r") or die ("Unable to open file $file !");
        echo fread($myfile, filesize($file));
        echo "<h1>fgets(Object of <i>fopen(filename, 'mode')</i></h1>";
        echo "<h2>file read line by line with br tag per line</h2>";
        $myfile = fopen($file, "r") or die ("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
            echo fgets($myfile)."<br>";
        }
        echo "<h2>file read line by line without br tag per line</h2>";
        $myfile = fopen($file, "r") or die ("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
            echo fgets($myfile);
        }
        $i = 0;
        $n = 60;
        echo "<h1>fgetc(Object of <i>fopen(filename, 'mode')</i></h1>";
        echo "<h2>file read charactor by charactor with br tag per $n charactor per line</h2>";
        $myfile = fopen($file, "r") or die ("Unable to open file!");
        // Output one charactor until end-of-file
        while(!feof($myfile)) {
            echo fgetc($myfile);//."<br>";
            $i++;
            if ($i % $n == 0) {
                echo "<br>";
            }
        }
        fclose($myfile)
        ?>
    </body>
</html>