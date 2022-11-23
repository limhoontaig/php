<!doctype html>
<html>
    <body>
        <?php
        $file = "index.txt";
        echo "<h1>readfile(<i>filename</i>);</h1><br>";
        echo readfile($file);
        echo "<h1>fopen(<i>filename, 'mode'</i>)</h1><br>";
        echo "<h2>fread(<i>filename, filesize()'</i>)</h1><br>";
        $myfile = fopen($file, "r") or die ("Unable to open file!");
        echo fread($myfile, filesize($file));
        fclose($myfile)
        ?>
    </body>
</html>