<?php
    $second = date('s');
    echo $second;
    if ($second % 3 == 0){
        echo " : 나머지가 0임";
    }
    elseif ($second % 3 == 1) {
        echo " : 나머지가 1임";
    }
    else{
        echo " : 나머지가 2임";
    }
?>