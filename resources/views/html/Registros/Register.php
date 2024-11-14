<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost'; 
$usuario = 'root';
$contrasena = '';
$base_datos = 'registros';

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'register') {
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $email = $conn->real_escape_string($_POST['email']);
    $contrasena = $conn->real_escape_string($_POST['contrasena']);
    
    $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, email, contrasena) VALUES ('$usuario', '$email', '$contrasenaHash')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente.";
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="Register.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="email">Correo:</label>
        <input type="email" name="email" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <br>
        <input type="hidden" name="action" value="register">
        <input type="submit" value="Registrar">
    </form>
    <p><a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí.</a></p>
</body>
</html>
