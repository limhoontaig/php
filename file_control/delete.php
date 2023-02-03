<?php

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
    
    $result = $db -> query($query);
   
    if(!$result)
    {
        echo "select Query error!";
        exit;
    }
    $result = $result->fetch_assoc();

    $dir = "/files/";
    $filehash = $result['hash'];
        
    if(!unlink($dir.$filehash))
    {
        echo "file delete error!!!!";
        exit;            
    }
    $query = "delete from ftp where num=".$_GET['num'];
    $result = $db->query($query);
    if(!$result)
    {
        echo "delete query error";
        exit;
    }

    echo "<script>alert('파일이 삭제 되었습니다.');";
    echo "history.back();</script>";
    
    $db->close();

?>