<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=tasklist', 'root', 'aeiou');

    $sql = "SELECT * FROM tasks";
    $outcomes = $connection->query($sql);
} catch (PDOException $e) {
    echo "Error de conexión";
}

if (isset($_POST['add-task'])) {
    $task = $_POST['task'];
    $status = 0;  // O cualquier otro valor que tenga sentido para tu aplicación
    $sql = 'INSERT INTO tasks (task, status) VALUES (?, ?)';
    $instruction = $connection->prepare($sql);
    if ($instruction->execute([$task, $status])) {
        echo "Tarea agregada correctamente.";
    } else {
        echo "Error al agregar la tarea: " . $instruction->errorInfo()[2];
    }
}
