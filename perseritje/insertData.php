<?php

    try{
        $pdo = new PDO ("mysql:host=localhost;dbname=cosmetics","root","");

        $brushes = "big";
        $blenders = "sphere";

        $sql = "INSERT INTO makeup (blush,concelear) VALUES ('$brushes','$blenders')";

        $pdo -> exec($sql);

        echo "New record created successfully";

    }catch(Exception $e){
        echo $e ->getMessage();
    }

?>