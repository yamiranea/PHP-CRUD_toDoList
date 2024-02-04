<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=tasklist', 'root', 'aeiou');
} catch (PDOException $e) {
    echo "Error de conexión";
}
