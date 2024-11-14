<?php
require 'db.php'; 

// Manejo del formulario de registro
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        echo "Registro exitoso. ¡Ahora puedes iniciar sesión!";
    } else {
        echo "Error al registrar el usuario.";
    }
}

// Manejo del formulario de inicio de sesión
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username']; // Puedes guardar más datos si lo necesitas

        // Redirigir al usuario a la página principal después del inicio de sesión
        header("Location: ../index.php"); // Cambia la ruta a tu página principal
        exit(); // Finaliza el script después de la redirección
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro e Inicio de Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <div class="container_r">
        <h2>Registrarse</h2>
        <form method="POST" action="login_register.php">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Nombre de usuario" required>
            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" name="register" class="btn">Registrarse</button>
        </form>

        <h2>Iniciar Sesión</h2>
        <form method="POST" action="login_register.php">
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" name="login" class="btn">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
