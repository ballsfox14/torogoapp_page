<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por registrarte</title>
    <style>
        /* Estilos generales para correo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .header {
            background: #2ecc71;
            padding: 20px;
            text-align: center;
            color: white;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
            color: #333;
        }
        .footer {
            background: #ecf0f1;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-agreement {
            background: #2ecc71;
            margin-left: 10px;
        }
        /* Estilos para redes sociales */
        .social-links {
            margin: 25px 0 15px;
            text-align: center;
        }
        .social-links a {
            display: inline-block;
            margin: 0 8px;
            color: #2c3e50;
            background: #ecf0f1;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            line-height: 36px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            transition: background 0.3s;
        }
        .social-links a:hover {
            background: #2ecc71;
            color: white;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>¡Gracias por registrarte, {{ $lead->name }}!</h1>
        </div>
        <div class="content">
            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('images/logo-torogo.png') }}" alt="ToroGoSV" style="max-width:150px; height:auto;">
            </div>

            <p>Hola <strong>{{ $lead->name }}</strong>,</p>
            <p>Nos alegra mucho que te hayas registrado en <strong>ToroGoSV</strong>. Pronto estaremos lanzando nuestra aplicación para todas las plataformas móviles (iOS y Android).</p>
            <p>Te mantendremos informado sobre el progreso y te avisaremos en cuanto esté disponible para que puedas disfrutar de entregas rápidas y seguras en Chalatenango.</p>
            <p>Mientras tanto, puedes consultar el <strong>Acuerdo de Licencia</strong> que aceptaste al registrarte:</p>
            <p style="text-align: center;">
                <a href="{{ route('acuerdo') }}" class="btn btn-agreement">Ver Acuerdo</a>
            </p>

            <!-- Redes Sociales -->
            <div class="social-links">
                <a href="https://www.facebook.com/torogoappsv/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">f</a>
                <a href="https://www.tiktok.com/@torogoappsv" target="_blank" rel="noopener noreferrer" aria-label="TikTok">t</a>
                <a href="https://www.instagram.com/torogoapp/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">i</a>
                <a href="https://www.linkedin.com/company/yerba-digital/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">in</a>
            </div>

            <p>Si tienes alguna pregunta, responde a este correo o contáctanos a través de nuestras redes.</p>
            <p>¡Gracias por ser parte de esta nueva forma de pedir comida!</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} ToroGoSV. Todos los derechos reservados.</p>
            <p>
                <a href="{{ route('privacidad') }}" style="color: #2ecc71;">Política de Privacidad</a> | 
                <a href="{{ route('terminos') }}" style="color: #2ecc71;">Términos y Condiciones</a>
            </p>
        </div>
    </div>
</body>
</html>