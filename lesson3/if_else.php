<?php
    $mosha = 30;

    //if($mosha<18){
    //    echo "Shko nshkoll!!!";
    //}else{
        //echo "shko nfakulltet!!!";
    //}

    if($mosha<18){
        echo "Shko nshkoll!!!";
    }else if($mosha = 21){
        echo "nisja fakulltetit!!!";
    }else if($mosha > 21){
        echo "vazhdo me pun!!!";
    }else{
        echo "nuk ka moshe";
    }
?>