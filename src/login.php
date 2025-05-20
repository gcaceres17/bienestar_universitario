<?php
//este valida solo los apellidos cargados//
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $apellido = strtolower(trim($_POST['apellido']));
    $permitidos = ['caceres', 'leguizamon', 'benitez', 'lopez', 'ramirez'];

    if (in_array($apellido, $permitidos)) {
        header("Location: index.php");
        exit;
    } else {
        $error = "Apellido no autorizado.";
    }
}
?>

<?php include "includes/header.php"; ?>

<h2>Iniciar sesión</h2>

<div class="contact-form">
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="usuario">Usuario o correo electrónico:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Ingresar</button>
    </form>
</div>

<?php include "includes/footer.php"; ?>
