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

<?php include "includes/header.php"; ?>
<h2>Login</h2>
<form method="POST" action="">
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required>
    <button type="submit">Ingresar</button>
</form>
<?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
<?php include "includes/footer.php"; ?>
