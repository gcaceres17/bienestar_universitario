# Portal de Bienestar Universitario

Este proyecto es un portal web para la gestión y promoción del bienestar universitario.

## Requisitos

- PHP 7.4 o superior
- Servidor web (recomendado: Apache o Nginx)
- Navegador web moderno

## Instalación y ejecución local

## Instalación y ejecución local

1. **Clona el repositorio:**

    ```sh
    git clone https://github.com/usuario/bienestar_universitario.git
    cd bienestar_universitario
    ```

2. **Construye y ejecuta el proyecto con Docker:**

    Asegúrate de tener Docker instalado. Luego ejecuta:

    ```sh
    docker build -t bienestar_universitario .
    docker run -p 8000:80 bienestar_universitario
    ```

3. **Abre tu navegador y visita:**

    ```
    http://localhost:8000
    ```

## Estructura principal

- `src/` — Archivos fuente del portal
- `assets/` — Imágenes y hojas de estilo
- `includes/` — Fragmentos reutilizables (header, footer, etc.)

## Notas

- Si usas XAMPP, MAMP o WAMP, coloca la carpeta `src` en el directorio `htdocs` o equivalente y accede desde `http://localhost/src`.
- El formulario de contacto aún no está habilitado para envío.

---

**Autor:** Giovanni Cáceres