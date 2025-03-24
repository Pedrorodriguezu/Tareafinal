<?php
// Configuración de la conexión a la base de datos
$servidor = "127.0.0.1"; // Cambia esto si usas un servidor remoto
$usuario = "";    // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$base_datos = "hotel";   // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Establecer el conjunto de caracteres para evitar problemas con acentos y caracteres especiales
$conexion->set_charset("utf8");
?>
