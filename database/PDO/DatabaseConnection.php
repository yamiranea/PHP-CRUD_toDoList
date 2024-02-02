<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=tasklist', 'root', 'aeiou');
} catch (PDOException $e) {
    echo "Error de conexión";
}

if (isset($_POST['add-task'])) {
    $task = $_POST['task'];
    $status = 0;
    $sql = "INSERT INTO tasks (task, status) VALUES (?, ?)";
    $instruction = $connection->prepare($sql);
    if ($instruction->execute([$task, $status])) {
        echo "Tarea agregada correctamente.";
    } else {
        echo "Error al agregar la tarea: " . $instruction->errorInfo()[2];
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id=?";
    $instruction = $connection->prepare($sql);
    $instruction->execute([$id]);
}

$sql = "SELECT * FROM tasks";
$outcomes = $connection->query($sql);
