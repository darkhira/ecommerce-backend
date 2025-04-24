<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login UNAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #df9800;
            font-family: 'Nunito', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: #ffffff;
        }
        .unab-logo {
            width: 320px;
            display: block;
            margin: 0 auto 1rem;
        }
        .btn-unab {
            background-color: #ff9900;
            color: white;
        }
        .btn-unab:hover {
            background-color: #d9860b;
        }
        .text-unab {
            color: #f8a01f;
            font-weight: bold;
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class="login-container text-center">
        <img src="{{ asset('storage/unab-logo.png') }}" alt="UNAB Logo" class="unab-logo">
        <h4 class="mb-4">Acceso Plataforma UNAB</h4>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Correo institucional" required>
            </div>

            <div class="form-group mb-4">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>

            <button type="submit" class="btn btn-unab w-100">Iniciar Sesión</button>
        </form>

        <div class="text-unab">
            Universidad Autónoma de Bucaramanga
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
