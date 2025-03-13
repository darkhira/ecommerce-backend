<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - UNAB Virtual</title>
    @yield('content')
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #003366; /* Azul UNAB */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav {
            background-color: #004080; /* Azul más claro */
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 40px 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .content h3 {
            color: #003366; /* Azul UNAB */
            font-size: 2em;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #003366;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .form-group button {
            background-color: #003366;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #004080;
        }

        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>UNAB Virtual</h1>
        <p>Agrega un nuevo producto</p>
    </header>

    <!-- Navegación -->
    <nav>
        <a href="#about">Sobre Nosotros</a>
        <a href="#products">Productos</a>
        <a href="#contact">Contacto</a>
    </nav>
    <!-- Footer -->
    <footer>
        <p>&copy; 2023 UNAB Virtual. Todos los derechos reservados.</p>
    </footer>
</body>
</html>