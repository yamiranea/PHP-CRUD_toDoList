<?php
$server = "localhost";
$database = "tasklist";
$username = "root";
$password = "cMdDh[5I79NSY7Cl";


$mysqliPoo = new mysqli($server, $username, $password, $database);

if ($mysqliPoo->connect_errno) {
    die("falló la conexión a la base de datos: {$mysqliPoo->connect_error}");
}
$setNames = $mysqliPoo->prepare("SET NAMES 'utf8'");
$setNames->execute();
var_dump($setNames);
echo "Conexión exitosa";
