<?php include "includes/header.php"; ?>

<h2>Contáctanos</h2>

<section>
    <p>¿Tenés dudas, sugerencias o simplemente querés comunicarte con el equipo del Portal de Bienestar Universitario Integral?
    Muy pronto podrás utilizar este formulario para hacerlo.</p>

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
</section>

<section class="bienestar-card">
    <div class="bienestar-img-container">
        <img src="assets/bienestar.png" alt="Bienestar universitario">
    </div>
    <div class="bienestar-info">
        <h3>Bienestar universitario</h3>
        <p>
            Esta imagen representa la importancia del bienestar integral en la vida universitaria.<br>
            La salud mental y física son fundamentales para el éxito académico y personal de los estudiantes.<br>
            En el portal, buscamos promover hábitos saludables y brindar apoyo a la comunidad estudiantil.
        </p>
    </div>
</section>

<section class="propuesta-card">
    <h3>Propuesta individual <span class="autor">- Kristian Van Landeghem</span></h3>
    <p>
        Mi propuesta para esta sección es incorporar un formulario activo que esté integrado con una base de datos o correo institucional,
        de forma que cualquier estudiante pueda dejar su mensaje y recibir respuesta automática o derivación a los servicios correspondientes.<br>
        Además, propongo incluir un <strong>mapa interactivo</strong> con las ubicaciones físicas de los centros de bienestar en la facultad.
    </p>
</section>

<?php include "includes/footer.php"; ?>
