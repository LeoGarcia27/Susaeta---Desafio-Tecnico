<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            scroll-behavior: smooth;
        }
        .fade {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .fade.in {
            opacity: 1;
        }
        .fixed-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }
        .nav-padding {
            padding-top: 3rem;
        }
    </style>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow p-4 fixed-nav">
        <div class="container mx-auto flex justify-between items-center">
            <img src="img/logoSusaeta.webp" alt="Logo" class="h-16">
            <ul class="flex space-x-4">
                <li><a href="#home" class="text-gray-600">Inicio</a></li>
                <li><a href="#about" class="text-gray-600">Sobre Nosotros</a></li>
                <li><a href="#products" class="text-gray-600">Nuestros productos</a></li>
                <li><a href="#contact" class="text-gray-600">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <div id="home" style="padding-top: 7rem;" class="py-20 text-center fade nav-padding">
        <h1 class="text-4xl font-bold">Bienvenidos a nuestra Editorial</h1>
        <img src="img/inicioSusaeta.webp" alt="Descripción" class="mt-4 mx-auto rounded-lg w-full max-w-5xl">
    </div>

    <div id="about" class="py-20 bg-gray-200 fade nav-padding">
    <div class="container mx-auto text-center">
    <h2 class="text-2xl font-bold">Sobre Nosotros</h2>
    <p class="mt-4 text-justify mx-4">Somos una empresa guatemalteca con más de 30 años de trayectoria. Nuestros libros tienen como objetivo desarrollar el aprendizaje interactivo, protagónico y constructivista en el estudiante.</p>
</div>
    </div>

    <div id="products" class="py-20 fade nav-padding">
        <div class="container mx-auto text-center">
            <div class="carousel">
                <?php include 'products.php'; ?>
            </div>
        </div>
    </div>
    <div id="catalogo" class="py-20 bg-gray-100 fade nav-padding">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between text-center md:text-left">
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold">Catálogo 2024</h2>
                <p class="mt-4">Conoce nuestro fondo editorial. Descarga aquí el catálogo digital Susaeta-Trascender.</p>
                <a href="https://plataformasusaeta.com/recursos/catalogo/guatemala_2024.pdf" target="_blank" class="mt-6 inline-block bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600">Descargar</a>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="img/ninoSusaeta.webp" alt="Catálogo 2024" class="w-full max-w-xs mx-auto rounded-lg shadow-md">
            </div>
        </div>
    </div>

    <div id="contact" class="py-20 bg-gray-200 fade nav-padding">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold">Contacto</h2>
            <form class="mt-4">
                <input type="text" placeholder="Nombre" class="p-2 border rounded" required>
                <input type="email" placeholder="Email" class="p-2 border rounded" required>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Enviar</button>
            </form>
        </div>
    </div>

    <footer class="py-4 text-center">
        <p>&copy; 2025 Editorial. Todos los derechos reservados.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.fade');
            elements.forEach(el => {
                el.classList.add('in');
            });
        });

        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            const target = this.hash;
            $('html, body').animate({
                scrollTop: $(target).offset().top - 64
            }, 800);
        });
    </script>

</body>
</html>