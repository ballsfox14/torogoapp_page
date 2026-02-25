<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- TÍTULO OPTIMIZADO SEO -->
    <title>@yield('title', 'ToroGoSV: App de comida a domicilio en Chalatenango | Entrega rápida')</title>
    
    <!-- META DESCRIPTION OPTIMIZADA -->
    <meta name="description" content="@yield('description', 'Prueba ToroGoSV en Chalatenango. Restaurantes locales, entrega en menos de 30 min y seguimiento en vivo. ¡Regístrate para acceso anticipado y descuento!')">
    
    <!-- OPEN GRAPH (PARA COMPARTIR EN REDES) -->
    <meta property="og:title" content="ToroGoSV - Llegamos a Chalatenango" />
    <meta property="og:description" content="Sé el primero en probar la app de comida a domicilio en Chalatenango. Regístrate y obtén un descuento." />
    <meta property="og:image" content="{{ asset('images/compartir.jpg') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    
    <!-- FAVICONS (todos en public/) -->
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="ToroGo" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
    <!-- Iconos adicionales para Android/Chrome (opcional, ya referenciados en el manifest) -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('web-app-manifest-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('web-app-manifest-512x512.png') }}" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "toro-green": "#2ecc71",
                        "toro-red": "#e74c3c",
                        "toro-yellow": "#f1c40f",
                        "toro-dark": "#2c3e50",
                        "toro-light": "#ecf0f1",
                    },
                    animation: {
                        "pulse-slow": "pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                        "bounce-slow": "bounce 3s infinite",
                    },
                },
            },
        }
    </script>
    
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- Estilos personalizados (se mantienen igual) -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
            overflow-x: hidden;
            background-color: #f9fafb;
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
        }

        .hero-bg {
            background: linear-gradient(120deg, rgba(236, 240, 241, 0.95) 0%, rgba(236, 240, 241, 0.85) 100%), url('https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');
            background-size: cover;
            background-position: center;
        }

        .feature-bg {
            background-color: rgba(236, 240, 241, 0.5);
        }

        .delivery-process {
            position: relative;
        }

        .delivery-process::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #2ecc71, #f1c40f, #e74c3c);
            z-index: 0;
            transform: translateY(-50%);
        }

        .benefit-card, .feature-card {
            transition: all 0.3s ease;
            border-radius: 20px;
            overflow: hidden;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 1;
        }

        .benefit-card:hover, .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .faq-item {
            transition: all 0.3s ease;
            border-radius: 12px;
        }

        .faq-item:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 100;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .scroll-top.active {
            opacity: 1;
        }

        .btn-primary {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(46, 204, 113, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(46, 204, 113, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(231, 76, 60, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(231, 76, 60, 0.4);
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            color: #e74c3c;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        .mobile-screen {
            border-radius: 30px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            transform: perspective(1000px) rotateY(-5deg);
        }

        .benefit-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .benefit-card:hover .benefit-icon {
            transform: scale(1.1);
        }

        .cta-box {
            background: linear-gradient(135deg, #2ecc71, #2c3e50);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .cta-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: -1;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 60px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #2ecc71, #f1c40f);
            border-radius: 2px;
        }

        .benefit-number {
            position: absolute;
            top: -15px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .form-container {
            max-width: 4xl;
            margin: 0 auto;
            background: white;
            border-radius: 2xl;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .form-section {
            padding: 2rem;
        }

        .form-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #2ecc71;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 3rem;
            border: 1px solid #e2e8f0;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #2ecc71;
            box-shadow: 0 0 0 3px rgba(46, 204, 113, 0.3);
        }

        .benefits-section {
            background: #ecf0f1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .benefit-icon-check {
            color: #2ecc71;
            margin-top: 0.25rem;
            margin-right: 0.75rem;
        }

        /* Animación suave para menú móvil */
        .mobile-menu {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.3s ease;
        }

        .mobile-menu.open {
            max-height: 1000px;
            opacity: 1;
        }

        .mobile-menu a {
            display: block;
            padding: 12px 24px;
            color: #2c3e50;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .mobile-menu a:hover {
            background-color: #2ecc71;
            color: white;
            padding-left: 28px;
        }
    </style>
</head>
<body>
    <!-- Scroll to top button -->
    <button id="scrollTop" class="scroll-top bg-toro-red text-white p-3 rounded-full shadow-lg">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Header -->
    @include('partials.header')

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- JavaScript (se mantiene igual) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Botón de scroll to top
            const scrollTopButton = document.getElementById('scrollTop');
            if (scrollTopButton) {
                window.addEventListener('scroll', () => {
                    scrollTopButton.classList.toggle('active', window.pageYOffset > 300);
                });

                scrollTopButton.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }

            // Acordeón FAQ
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach((item) => {
                const button = item.querySelector('button');
                const content = item.querySelector('div');
                const icon = button?.querySelector('i');

                if (button && content) {
                    button.addEventListener('click', () => {
                        content.classList.toggle('hidden');
                        if (icon) {
                            icon.classList.toggle('fa-chevron-down');
                            icon.classList.toggle('fa-chevron-up');
                        }
                        item.classList.toggle('bg-toro-light');
                        item.classList.toggle('bg-white');
                    });
                }
            });

            // Navegación suave
            const navLinks = document.querySelectorAll('a[href^="#"]');
            navLinks.forEach((anchor) => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth',
                        });
                    }
                });
            });

            // Menú móvil
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('open');
                });

                const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
                mobileMenuLinks.forEach((link) => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.remove('open');
                    });
                });
            }

            // Manejo del formulario de leads (ahora se envía al controlador)
            const leadForm = document.getElementById('leadForm');
            if (leadForm) {
                leadForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    
                    const submitBtn = leadForm.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Enviando...';
                    submitBtn.disabled = true;
                    
                    const formData = new FormData(leadForm);
                    
                    try {
                        const response = await fetch("{{ route('leads.store') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json'
                            },
                            body: formData
                        });
                        
                        const data = await response.json();
                        
                        if (data.success) {
                            showNotification('¡Registro exitoso! ' + data.message, 'success');
                            leadForm.reset();
                            toggleBusinessFields();
                            toggleDriverFields();
                        } else {
                            // Mostrar errores
                            let errorMsg = 'Error: ';
                            if (data.errors) {
                                errorMsg += Object.values(data.errors).flat().join(', ');
                            } else if (data.message) {
                                errorMsg += data.message;
                            } else {
                                errorMsg += 'Ocurrió un error';
                            }
                            showNotification(errorMsg, 'error');
                            
                            // Marcar campos con error
                            if (data.errors) {
                                for (const [field, errors] of Object.entries(data.errors)) {
                                    const input = leadForm.querySelector(`[name="${field}"]`);
                                    if (input) {
                                        input.classList.add('border-red-500');
                                    }
                                }
                            }
                        }
                    } catch (error) {
                        showNotification('Error de conexión. Intenta nuevamente.', 'error');
                        console.error('Error:', error);
                    } finally {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }
                });
                
                // Mostrar/ocultar campos según tipo de usuario
                const userTypeRadios = leadForm.querySelectorAll('input[name="type"]');
                userTypeRadios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        toggleBusinessFields();
                        toggleDriverFields();
                    });
                });
                
                function toggleBusinessFields() {
                    const businessFields = document.getElementById('businessFields');
                    const isBusiness = leadForm.querySelector('input[name="type"]:checked')?.value === 'business';
                    businessFields.style.display = isBusiness ? 'block' : 'none';
                    if (isBusiness) {
                        leadForm.querySelector('[name="business_name"]').required = true;
                    } else {
                        leadForm.querySelector('[name="business_name"]').required = false;
                    }
                }
                
                function toggleDriverFields() {
                    const driverFields = document.getElementById('driverFields');
                    const isDriver = leadForm.querySelector('input[name="type"]:checked')?.value === 'driver';
                    driverFields.style.display = isDriver ? 'block' : 'none';
                    if (isDriver) {
                        leadForm.querySelector('[name="vehicle_type"]').required = true;
                    } else {
                        leadForm.querySelector('[name="vehicle_type"]').required = false;
                    }
                }
                
                // Inicializar
                toggleBusinessFields();
                toggleDriverFields();
            }
            
            // Función para mostrar notificaciones
            function showNotification(message, type) {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
                    type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} mr-2"></i>
                        <span>${message}</span>
                    </div>
                `;
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 5000);
            }
        });
    </script>
</body>
</html>