<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $host = 'localhost'; 
    $db_usuario = 'root';
    $db_contrasena = '';
    $base_datos = 'registros';

    $conn = new mysqli($host, $db_usuario, $db_contrasena, $base_datos);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        
        if (password_verify($contrasena, $fila['contrasena'])) {
            $_SESSION['usuario'] = $usuario; 
            header("Location: ../../index.php"); 
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos";
        }
    } else {
        $error = "Usuario o contraseña incorrectos";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
</head>
<body>
    <form method="POST" action="login.php">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <button type="submit">INGRESAR</button>
    </form>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</body>
</html>
