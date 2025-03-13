@extends('layout.app')

@section('content')
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
    <!-- Script para manejar el formulario -->
    <script>
        document.getElementById('create-product-form').addEventListener('submit', function(event) {
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
@endsection
