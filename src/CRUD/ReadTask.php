<?php
include "/Applications/MAMP/htdocs/PHP-toDoList/src/database/PDO/DatabaseConnection.php";

$sql = "SELECT * FROM tasks";
$outcomes = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
