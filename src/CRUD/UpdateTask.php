<?php
include "/Applications/MAMP/htdocs/PHP-toDoList/src/database/PDO/DatabaseConnection.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $status = (isset($_POST['status'])) ? 1 : 0;

    $sql = "UPDATE tasks SET status=? WHERE id=?";
    $instruction = $connection->prepare($sql);
    $instruction->execute([$status, $id]);
}

if (isset($_POST['modify-task'])) {
    $id = $_POST['id'];
    $modifiedTask = $_POST['modifiedTask'];

    $sql = "UPDATE tasks SET task=? WHERE id=?";
    $instruction = $connection->prepare($sql);

    if ($instruction->execute([$modifiedTask, $id])) {
        echo "Tarea modificada correctamente.";
    } else {
        echo "Error al modificar la tarea: " . $instruction->errorInfo()[2];
    }
}
