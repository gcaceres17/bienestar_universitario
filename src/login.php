<?php
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

<?php include "includes/headerLogin.php"; ?>


<div class="contact-form">
    <form method="POST" action="">
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Ingresar</button>
    </form>
</div>

<?php include "includes/footer.php"; ?>
