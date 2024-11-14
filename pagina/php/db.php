<?php
$host = 'localhost';
$dbname = 'allimportados';
$username = 'root';  // O el usuario que tengas configurado
$password = '';  // La contraseña de tu MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
