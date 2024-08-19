<?php
// Incluye el archivo connection.php
require_once 'connection.php';

// Recibe los datos de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Autentica al usuario con el sistema de DB2
if (db2_authenticate($conn, $username, $password)) {
    // Inicia la sesión
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../frontend/miPerfil.html");
    exit;
} else {
    // Mostrar mensaje de error
    echo "Usuario o contraseña incorrectos";
}
?>