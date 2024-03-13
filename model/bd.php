<?php
$servidor = "localhost";
$baseDeDatos = "jujutsu";
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos;charset=utf8", $usuario, $contraseña);
} catch(PDOException $ex) {
    echo "Ocurrió un error con la base de datos: " . $ex->getMessage();
}
?>