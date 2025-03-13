<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - UNAB Virtual</title>
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

        .hero {
            background-image: url('unab-virtual-hero.jpg'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .hero h2 {
            font-size: 3em;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
            padding: 20px;
        }

        .content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content h3 {
            color: #003366; /* Azul UNAB */
            font-size: 2em;
            margin-bottom: 20px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            background-color: #e0e0e0; /* Color de fondo para el contenedor de la imagen */
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product-image span {
            color: #666;
            font-size: 1.2em;
        }

        .product-card h4 {
            color: #003366;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .product-card p {
            font-size: 1em;
            color: #666;
        }

        .product-card a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #003366;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .product-card a:hover {
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
        <p>Explora nuestros productos y servicios</p>
    </header>

    <!-- Navegación -->
    <nav>
        <a href="#about">Sobre Nosotros</a>
        <a href="#products">Productos</a>
        <a href="#contact">Contacto</a>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h2>Descubre lo que tenemos para ti</h2>
    </div>

    <!-- Sección de productos -->
    <div class="content" id="products">
        <h3>Nuestros Productos</h3>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <span>Imagen del producto 1</span>
                </div>
                <h4>Producto 1</h4>
                <p>Descripción breve del producto 1. Ideal para estudiantes y profesionales.</p>
                <a href="#contact">Más información</a>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span>Imagen del producto 2</span>
                </div>
                <h4>Producto 2</h4>
                <p>Descripción breve del producto 2. Perfecto para el aprendizaje en línea.</p>
                <a href="#contact">Más información</a>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span>Imagen del producto 3</span>
                </div>
                <h4>Producto 3</h4>
                <p>Descripción breve del producto 3. Diseñado para la innovación educativa.</p>
                <a href="#contact">Más información</a>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span>Imagen del producto 4</span>
                </div>
                <h4>Producto 4</h4>
                <p>Descripción breve del producto 4. Herramientas para el éxito profesional.</p>
                <a href="#contact">Más información</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 UNAB Virtual. Todos los derechos reservados.</p>
    </footer>

</body>
</html>