<?php
    if(!$_FILES['file'] ['name'])
    {
        
        echo "<script>alert ('업로드 할 파일이 입력되지 않았습니다.');";
        echo "history.back();</script>";
        exit;
    }

    if (strlen($_FILES['file'] ['name']) > 255)
    {
        echo "<script>alert ('파일 이름이 너무 깁니다.');";
        echo "history.back();</script>";
        exit;
    }
    
    $date = date("YmdHis", time());
    $dir = "/files/";

    $file_hash = $date.$_FILES['file']['name'];
    $file_hash = md5($file_hash);
    $upfile = $dir.$file_hash;
    
    print_r($_FILES);
    if(is_uploaded_file($_FILES['file']['tmp_name']))
    {
        echo "File ". $_FILES['file']['name'] ." uploaded successfully.\n";
        echo "Displaying contents\n";
        readfile($_FILES['file']['tmp_name']);
    } else {
        echo "Possible file upload attack: ";
        echo "filename '". $_FILES['file']['tmp_name'] . "'.";
    }
    
    if(!move_uploaded_file($_FILES['file']['tmp_name'], $upfile))
        {
            echo "upload error";
            exit;
    } else {
            echo "Possible file upload attack!\n";
    }
    
    /*if(is_uploaded_file($_FILES['file']['tmp_name']))
    {
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $upfile))
        {
            echo "$_FILES <br>";
            echo "<br>";
            echo "upload error 001";
            exit;
        }
    }
    */
    @ $db = new mysqli("localhost","limht","secret","pictures");
    if (mysqli_connect_errno())
    {
        echo "DB error";
        exit;
    }

    $query = "insert into ftp (name, hash, time)
              values('".$_FILES['file']['name']."',
              '".$file_hash."', '".$date."')";
    $result = $db->query($query);
    if (!result)
    {
        echo "DB upload error 002";
        exit;
    }

    $db->close();

    echo "<script>alert('업로드 성공');";
    echo "history.back();</script>";
 
    

?>
