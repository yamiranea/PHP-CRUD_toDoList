<?php
include "/Applications/MAMP/htdocs/PHP-toDoList/src/database/PDO/DatabaseConnection.php";

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
