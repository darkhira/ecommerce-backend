<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - UNAB Virtual</title>
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

    <!-- Formulario para crear un producto -->
    <div class="content">
        <h3>Crear un Nuevo Producto</h3>
        <form id="create-product-form">
            <div class="form-group">
                <label for="product-name">Nombre del Producto</label>
                <input type="text" id="product-name" name="product-name" required>
            </div>
            <div class="form-group">
                <label for="product-description">Descripción</label>
                <textarea id="product-description" name="product-description" required></textarea>
            </div>
            <div class="form-group">
                <label for="product-price">Precio</label>
                <input type="number" id="product-price" name="product-price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="product-image">Imagen del Producto (URL)</label>
                <input type="url" id="product-image" name="product-image" required>
            </div>
            <div class="form-group">
                <button type="submit">Crear Producto</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 UNAB Virtual. Todos los derechos reservados.</p>
    </footer>

    <!-- Script para manejar el formulario -->
    <script>
        document.getElementById('create-product-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Evita que el formulario se envíe

            // Obtener los valores del formulario
            const productName = document.getElementById('product-name').value;
            const productDescription = document.getElementById('product-description').value;
            const productPrice = document.getElementById('product-price').value;
            const productImage = document.getElementById('product-image').value;

            // Crear un objeto con los datos del producto
            const product = {
                name: productName,
                description: productDescription,
                price: productPrice,
                image: productImage
            };

            // Mostrar los datos en la consola (puedes enviarlos a un servidor aquí)
            console.log('Producto creado:', product);

            // Mostrar un mensaje de éxito
            alert('Producto creado exitosamente');

            // Limpiar el formulario
            document.getElementById('create-product-form').reset();
        });
    </script>

</body>
</html>