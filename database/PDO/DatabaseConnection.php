<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=tasklist', 'root', 'aeiou');

    $sql = "SELECT * FROM tasks";
    $outcomes = $connection->query($sql);
} catch (PDOException $e) {
    echo "Error de conexión";
}
