<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cosmetics", "root", "");

    $sql = "ALTER TABLE makeup ADD foundation VARCHAR(50)";

    $pdo->exec($sql);

    echo "Column created successfully!";

} catch (PDOException $e) {
    echo "Error creating column: " . $e->getMessage();
}

?>

