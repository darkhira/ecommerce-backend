<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB Virtual - Educación en Línea</title>
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

        .content p {
            line-height: 1.6;
            font-size: 1.1em;
        }

        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .program-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .program-card h4 {
            color: #003366;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .program-card p {
            font-size: 1em;
            color: #666;
        }

        .program-card a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #003366;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .program-card a:hover {
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

    <header>
        <h1>UNAB Virtual</h1>
        <p>Educación en línea con calidad y flexibilidad</p>
    </header>

    <nav>
        <a href="#about">Sobre Nosotros</a>
        <a href="#programs">Programas</a>
        <a href="#admissions">Admisiones</a>
        <a href="#contact">Contacto</a>
    </nav>

    <div class="hero">
        <h2>Transforma tu futuro con UNAB Virtual</h2>
    </div>

    <div class="content" id="products">
        <h3>Sobre Nosotros</h3>
        <p>UNAB Virtual es la plataforma de educación en línea de la Universidad Autónoma de Bucaramanga. Ofrecemos programas académicos de alta calidad, diseñados para adaptarse a tu estilo de vida y necesidades profesionales.</p>
    </div>

    <div class="content" id="programs">
        <h3>Nuestros Programas</h3>
        <div class="programs-grid">
            <div class="program-card">
                <h4>Pregrados Virtuales</h4>
                <p>Programas de pregrado en modalidad virtual para que estudies desde cualquier lugar.</p>
                <a href="#admissions">Más información</a>
            </div>
            <div class="program-card">
                <h4>Posgrados Virtuales</h4>
                <p>Especializaciones y maestrías en línea para avanzar en tu carrera profesional.</p>
                <a href="#admissions">Más información</a>
            </div>
            <div class="program-card">
                <h4>Cursos Cortos</h4>
                <p>Formación continua en áreas específicas para potenciar tus habilidades.</p>
                <a href="#admissions">Más información</a>
            </div>
        </div>
    </div>

    <div class="content" id="admissions">
        <h3>Admisiones</h3>
        <p>¿Listo para comenzar? Conoce los requisitos de admisión y el proceso de inscripción para unirte a UNAB Virtual.</p>
        <a href="#contact" style="background-color: #003366; color: #fff; padding: 10px 20px; text-decoration: none;">Iniciar proceso</a>
    </div>

    <div class="content" id="contact">
        <h3>Contacto</h3>
        <p>Para más información, contáctanos:</p>
        <p><strong>Teléfono:</strong> +57 7 123 4567</p>
        <p><strong>Email:</strong> info@unabvirtual.edu.co</p>
        <p><strong>Dirección:</strong> Av. 42 #48-11, Bucaramanga, Colombia</p>
    </div>

    <footer>
        <p>&copy; 2023 UNAB Virtual. Todos los derechos reservados.</p>
    </footer>

</body>
</html>