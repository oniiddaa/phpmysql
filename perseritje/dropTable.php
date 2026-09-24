<?php

    try{

    $pdo = new PDO("mysql:host=localhost;dbname=cosmetics","root","");

    $sql = "DROP TABLE makeup";

    $pdo->exec($sql);

    echo "Table dropped successfully!";

    }catch(PDOException $e){
        echo "Error deleting table: ". $e.getMessage();
    }
?>