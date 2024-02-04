<?php
include "/Applications/MAMP/htdocs/PHP-toDoList/src/database/PDO/DatabaseConnection.php";
if (isset($_POST['delete-task'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tasks WHERE id=?";
    $instruction = $connection->prepare($sql);
    $instruction->execute([$id]);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id=?";
    $instruction = $connection->prepare($sql);
    $instruction->execute([$id]);
}
