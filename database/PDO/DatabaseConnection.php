<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=tasklist', 'root', 'aeiou');
    echo "Conexión establecida";
} catch (PDOException $e) {
    echo "Error de conexión" . $e->getMessage();
}
