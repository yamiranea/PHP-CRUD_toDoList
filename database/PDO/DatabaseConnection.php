<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=tasklist', 'root', 'aeiou');
} catch (PDOException $e) {
    echo "Error de conexión";
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $status = (isset($_POST['status'])) ? 1 : 0;

    $sql = "UPDATE tasks SET status=? WHERE id=?";
    $instruction = $connection->prepare($sql);
    $instruction->execute([$status, $id]);
}

if (isset($_POST['add-task'])) {
    $task = $_POST['task'];
    $status = 0;
    $sql = "INSERT INTO tasks (task, date, status) VALUES (?, CURRENT_DATE, ?)";
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
$outcomes = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
