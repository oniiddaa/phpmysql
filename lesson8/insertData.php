<?php

    try{
        $pdo = new PDO ("mysql:host=localhost;dbname=db4","root","");

        $username = "Jack";
        $password = "test";

        $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";

        $pdo -> exec($sql);

        echo "New record created successfully";

    }catch(Exception $e){
        echo $e ->getMessage();
    }

    //SELECT *FROM PRODUCTS AS P CATEGORIES AS C ON P/CATEGORY_ID = C.ID

    //SELECT products.name as 'Product name', categories.name as 'Category FROM products INNER JOIN
    //categories on products.category_id=categories.id
?>