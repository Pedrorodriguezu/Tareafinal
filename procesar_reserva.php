<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = $_POST['numero-documento'];
    $tipo_documento = $_POST['tipo-documento'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $ciudad = $_POST['ciudad'];
    $fecha_reserva = $_POST['fecha-reserva'];

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO reservas (numero_documento, tipo_documento, nombre, telefono, email, ciudad, fecha_reserva) 
            VALUES ('$documento', '$tipo_documento', '$nombre', '$telefono', '$email', '$ciudad', '$fecha_reserva')";

    if ($conn->query($sql) === TRUE) {
        // Redirige de vuelta a la página principal con un mensaje de éxito
        header("Location: index.html?mensaje=Reserva exitosa");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>


