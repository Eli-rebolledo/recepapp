<?php
// Datos de conexión a la base de datos
// En Render, estas variables se configuran en el panel de Environment Variables
$host     = getenv('DB_HOST')     ?: "localhost:3307";
$usuario  = getenv('DB_USER')     ?: "root";
$password = getenv('DB_PASSWORD') ?: "";
$base_datos = getenv('DB_NAME')   ?: "recepapp";

// Crear la conexión con el servidor MySQL
$conexion = new mysqli($host, $usuario, $password, $base_datos);
$conexion->set_charset("utf8mb4");

// Verificar si ocurrió algún error al conectar
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
