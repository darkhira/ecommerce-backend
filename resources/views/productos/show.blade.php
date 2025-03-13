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
            text-align: center;
        }

        header {
            background-color: #003366;
            color: #fff;
            padding: 20px 0;
        }

        .content {
            padding: 40px 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 200px;
            height: 200px;
            margin-bottom: 15px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <header>
        <h1>UNAB Virtual</h1>
    </header>

    <div class="content">
        <h3>Producto Seleccionado</h3>
        <div id="product-container"></div>
    </div>

    <script>
        // Lista de productos
        const productos = [
            { nombre: "Producto 1", descripcion: "Descripción del producto 1", imagen: "producto1.jpg" },
            { nombre: "Producto 2", descripcion: "Descripción del producto 2", imagen: "producto2.jpg" },
            { nombre: "Producto 3", descripcion: "Descripción del producto 3", imagen: "producto3.jpg" },
            { nombre: "Producto 4", descripcion: "Descripción del producto 4", imagen: "producto4.jpg" }
        ];

        // Obtener el parámetro de la URL
        const urlParts = window.location.pathname.split("/");
        const productName = decodeURIComponent(urlParts[urlParts.length - 1]).toLowerCase();

        // Buscar el producto
        const productoEncontrado = productos.find(producto => producto.nombre.toLowerCase() === productName);

        // Mostrar el producto si existe, o mostrar uno genérico si no está en el sistema
        const productContainer = document.getElementById("product-container");

        if (productoEncontrado) {
            productContainer.innerHTML = `
                <div class="product-card">
                    <img src="${productoEncontrado.imagen}" alt="${productoEncontrado.nombre}">
                    <h4>${productoEncontrado.nombre}</h4>
                    <p>${productoEncontrado.descripcion}</p>
                </div>
            `;
        } else {
            productContainer.innerHTML = `
                <div class="product-card">
                    <img src="placeholder.jpg" alt="Producto no encontrado">
                    <h4>${productName}</h4>
                    <p>Este producto no está en nuestro sistema, pero podemos ayudarte a encontrar algo similar.</p>
                </div>
            `;
        }
    </script>

</body>
</html>
