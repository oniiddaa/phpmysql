<?php

    try{

    $pdo = new PDO("mysql:host=localhost;dbname=db4","root","");

    $sql = "DROP TABLE users";

    $pdo->exec($sql);

    echo "Table dropped successfully!";

    }catch(PDOException $e){
        echo "Error deleting table: ". $e.getMessage();
    }
?>