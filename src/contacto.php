<?php include "includes/header.php"; ?>




<section>
    
    <div class="contact-form">
        <form>
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" disabled>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" disabled>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" disabled></textarea>

            <button type="submit" disabled>Enviar</button>
        </form>
    </div>
    <p>Si tenes alguna dudas, sugerencias o simplemente querés comunicarte con el equipo. Completa los datos y nos pondremos en contacto</p>
</section>
<?php include "includes/footer.php"; ?>
