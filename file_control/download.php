<?php

    header("Content-type: text/html; charset=utf-8");

    if(!$_GET['num'])
    {
        echo "<script>alert('이상하게 접근하셨습니다.;;');";
        echo "history.back();</script>";   
    }

    @ $db = new mysqli('localhost', 'limht', 'secret', 'pictures');
    if (mysqli_connect_errno())
    {
        echo "DB connect error!";
        exit;
    }

    $query = "select name, hash from ftp where num=".$_GET['num'];
    $hash = $_GET['file'];

    $result = $db -> query($query);
    
    if(!$result)
    {
        echo "Query error!";
        exit;
    }
    
    $result = $result->fetch_assoc();

    $dir = "/files/";
    $filename = $result['name'];
    $filehash = $result['hash'];
    
    if(file_exists($dir.$filehash))
    {
        echo "!!!!MMM";
        header("Content-Type: Appllication/octet-stream");
        header("Content-Disposition: attachment; filename=".$filename);
        header("Content-Trandfer-Encoding: binary");
        header("Content-Length: ".filesize($dir.$filehash));

        $fp = fopen($dir.$filehash, "rb");
        while(!feof($fp))
        {
            echo fread($fp, 1024);
        }
        fclose($fp);

        $query = "update ftp set down=(down+1) where num=".$_GET['num'];
        $result = $db->query($query);
        if(!result)
        {
            echo "down counter update error";
            exit;
        }    
    } else {
        echo "<script>alert('파일이 없습니다.')";
        echo "history.back();</script>";
        exit;
    }
    $db->close();

?>