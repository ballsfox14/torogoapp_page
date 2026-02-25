@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-bg py-20 md:py-28">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <div class="mb-2">
                    <span class="bg-toro-green bg-opacity-20 text-toro-green font-bold py-1 px-4 rounded-full text-sm">
                        ¡Próximo lanzamiento!
                    </span>
                </div>

                <!-- H1 OPTIMIZADO -->
                <h1 class="text-4xl md:text-6xl font-bold mb-6 text-toro-dark">
                    Pide comida de tus restaurantes favoritos en San Salvador con 
                    <span class="text-toro-green">ToroGoSV</span>
                </h1>

                <p class="text-lg text-gray-600 mb-8 max-w-lg">
                    Torogosv conecta los mejores restaurantes locales y tiendas con tu puerta.
                    Disfruta de entregas súper rápidas, seguimiento en tiempo real y una
                    experiencia sin complicaciones.
                </p>

                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="btn-primary text-white font-bold py-3 px-8 rounded-full text-lg flex items-center justify-center" onclick="document.getElementById('contactForm').scrollIntoView({behavior: 'smooth'})">
                        <i class="fas fa-bell mr-2"></i> Notificarme el lanzamiento
                    </button>

                    <button class="bg-white text-toro-dark font-bold py-3 px-8 rounded-full text-lg border-2 border-toro-light hover:border-toro-green transition flex items-center justify-center">
                        <i class="fas fa-handshake mr-2"></i> Trabajar con nosotros
                    </button>
                </div>

                <div class="mt-10 bg-toro-light p-4 rounded-xl border border-toro-green border-opacity-30">
                    <p class="text-toro-dark font-medium">
                        <i class="fas fa-info-circle text-toro-green mr-2"></i>
                        ¡Sé de los primeros en probar nuestra app! Regístrate para recibir acceso anticipado.
                    </p>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center relative">
                <div class="mobile-screen w-72 h-[550px] bg-white relative overflow-hidden floating">
                    <div class="absolute top-0 left-0 right-0 h-12 bg-toro-green flex items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-toro-yellow flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-sm"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-12 bg-toro-light flex items-center justify-center space-x-12">
                        <i class="fas fa-home text-toro-dark"></i>
                        <i class="fas fa-search text-toro-dark"></i>
                        <div class="w-10 h-10 bg-toro-green rounded-full flex items-center justify-center -mt-6">
                            <i class="fas fa-shopping-bag text-white"></i>
                        </div>
                        <i class="fas fa-heart text-toro-dark"></i>
                        <i class="fas fa-user text-toro-dark"></i>
                    </div>
                    <!-- IMAGEN CON ALT DESCRIPTIVO -->
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=768&q=80" alt="Interfaz de la app ToroGoSV mostrando comida" class="w-full h-full object-cover">
                </div>

                <div class="absolute -bottom-8 -left-8 w-24 h-24 bg-toro-yellow rounded-full opacity-20"></div>
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-toro-red rounded-full opacity-20"></div>
                <div class="absolute top-1/4 -left-10 w-16 h-16 bg-toro-green rounded-full opacity-20"></div>

                <!-- Elemento decorativo -->
                <div class="absolute -bottom-12 right-0 bg-toro-red text-white px-4 py-2 rounded-lg shadow-lg transform rotate-3">
                    <i class="fas fa-clock mr-2"></i> ¡Entregas en menos de 30 min!
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 feature-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-toro-dark">
                    Por qué elegir Torogosv
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    La solución de delivery más rápida y confiable con beneficios exclusivos para todos
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center transition-all duration-300 hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-green bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-bolt text-3xl text-toro-green"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Entrega Express</h3>
                    <p class="text-gray-600">
                        Recibe tus pedidos en menos de 30 minutos con nuestro servicio prioritario.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center transition-all duration-300 hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-red bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-map-marker-alt text-3xl text-toro-red"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Seguimiento en Vivo</h3>
                    <p class="text-gray-600">
                        Sigue a tu repartidor en tiempo real desde la app hasta tu puerta.
                    </p>
                </div>

                <!-- Feature 3: MODIFICADO PARA MVP -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center transition-all duration-300 hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-yellow bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-utensils text-3xl text-toro-yellow"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Restaurantes locales</h3>
                    <p class="text-gray-600">
                        Selección exclusiva de los mejores restaurantes de San Salvador. ¡Pronto más opciones!
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center transition-all duration-300 hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-green bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-shield-alt text-3xl text-toro-green"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Pago Seguro</h3>
                    <p class="text-gray-600">
                        Transacciones 100% seguras con múltiples opciones de pago disponibles.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section id="how-it-works" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-toro-dark">
                    Así de fácil es usar Torogosv
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Tu satisfacción en solo tres pasos
                </p>
            </div>

            <div class="delivery-process max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
                    <!-- Step 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="w-16 h-16 bg-toro-green rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                            1
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-toro-dark">Descarga la App</h3>
                        <p class="text-gray-600 mb-4">
                            Disponible en iOS y Android. Regístrate en segundos.
                        </p>
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-3xl text-toro-green"></i>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="w-16 h-16 bg-toro-yellow rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                            2
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-toro-dark">Elige tu pedido</h3>
                        <p class="text-gray-600 mb-4">
                            Explora cientos de opciones y personaliza tu pedido.
                        </p>
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-search text-3xl text-toro-yellow"></i>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="w-16 h-16 bg-toro-red rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                            3
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-toro-dark">Disfruta</h3>
                        <p class="text-gray-600 mb-4">
                            Recibe tu pedido caliente y listo para disfrutar.
                        </p>
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-smile text-3xl text-toro-red"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <div class="inline-flex space-x-4">
                    <button class="btn-secondary text-white font-bold py-4 px-10 rounded-full text-lg flex items-center">
                        <i class="fab fa-apple mr-3 text-xl"></i> App Store
                    </button>
                    <button class="bg-toro-dark text-white font-bold py-4 px-10 rounded-full text-lg flex items-center">
                        <i class="fab fa-google-play mr-3 text-xl"></i> Google Play
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Registro (con reCAPTCHA) -->
    <section id="contactForm" class="py-20 bg-gradient-to-r from-toro-green to-toro-dark relative overflow-hidden">
        <!-- Elementos decorativos -->
        <div class="absolute top-0 left-0 w-full h-full opacity-5">
            <div class="absolute top-20 left-10 w-24 h-24 rounded-full bg-white"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 rounded-full bg-white"></div>
            <div class="absolute top-1/3 right-1/4 w-16 h-16 rounded-full bg-white"></div>
        </div>

        <!-- Contenido principal -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="form-container">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Formulario -->
                    <div class="form-section">
                        <div class="text-center mb-8">
                            <div class="inline-block bg-toro-green text-white font-bold py-1 px-4 rounded-full mb-4">
                                <i class="fas fa-hourglass-half mr-2"></i> Próximamente
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold mb-3 text-toro-dark">
                                Sé el primero en probar ToroGosv
                            </h2>
                            <p class="text-gray-600">
                                Regístrate ahora y recibe una notificación exclusiva cuando lancemos nuestra aplicación, además de un descuento especial para tu primer pedido.
                            </p>
                        </div>

                        <form id="leadForm" class="space-y-5">
                            @csrf
                            
                            <!-- Nombre completo -->
                            <div>
                                <label class="block text-toro-dark font-medium mb-2">Nombre completo</label>
                                <div class="relative">
                                    <i class="fas fa-user form-icon"></i>
                                    <input type="text" name="name" placeholder="Tu nombre completo" class="form-input" required>
                                </div>
                            </div>

                            <!-- Correo electrónico -->
                            <div>
                                <label class="block text-toro-dark font-medium mb-2">Correo electrónico</label>
                                <div class="relative">
                                    <i class="fas fa-envelope form-icon"></i>
                                    <input type="email" name="email" placeholder="tu@email.com" class="form-input" required>
                                </div>
                            </div>

                            <!-- Teléfono -->
                            <div>
                                <label class="block text-toro-dark font-medium mb-2">Teléfono</label>
                                <div class="relative">
                                    <i class="fas fa-phone-alt form-icon"></i>
                                    <input type="tel" name="phone" placeholder="(503) 1234-5678" class="form-input" required>
                                </div>
                            </div>

                            <!-- Tipo de usuario -->
                            <div>
                                <label class="block text-toro-dark font-medium mb-2">¿Qué te interesa?</label>
                                <div class="space-y-3">
                                    <label class="flex items-center">
                                        <input type="radio" name="type" value="client" class="h-5 w-5 text-toro-green focus:ring-toro-green" checked>
                                        <span class="ml-3 text-gray-700">Ser cliente</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="type" value="driver" class="h-5 w-5 text-toro-green focus:ring-toro-green">
                                        <span class="ml-3 text-gray-700">Ser repartidor</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="type" value="business" class="h-5 w-5 text-toro-green focus:ring-toro-green">
                                        <span class="ml-3 text-gray-700">Tener mi negocio en la app</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Campos condicionales para empresas -->
                            <div id="businessFields" style="display: none;">
                                <div>
                                    <label class="block text-toro-dark font-medium mb-2">Nombre del negocio</label>
                                    <div class="relative">
                                        <i class="fas fa-store form-icon"></i>
                                        <input type="text" name="business_name" placeholder="Nombre de tu restaurante o tienda" class="form-input">
                                    </div>
                                </div>
                            </div>

                            <!-- Campos condicionales para repartidores -->
                            <div id="driverFields" style="display: none;">
                                <div>
                                    <label class="block text-toro-dark font-medium mb-2">Tipo de vehículo</label>
                                    <div class="relative">
                                        <i class="fas fa-motorcycle form-icon"></i>
                                        <select name="vehicle_type" class="form-input">
                                            <option value="">Selecciona tu vehículo</option>
                                            <option value="motocicleta">Motocicleta</option>
                                            <option value="bicicleta">Bicicleta</option>
                                            <option value="auto">Auto</option>
                                            <option value="caminando">A pie</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Información adicional -->
                            <div>
                                <label class="block text-toro-dark font-medium mb-2">Información adicional (opcional)</label>
                                <textarea name="additional_info" rows="3" placeholder="Comentarios o preguntas..." class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-toro-green focus:border-transparent"></textarea>
                            </div>

                            <!-- reCAPTCHA -->
                            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>

                            <!-- Botón de registro -->
                            <button type="submit" class="btn-primary w-full text-white font-bold py-4 px-8 rounded-full text-lg mt-6">
                                <i class="fas fa-paper-plane mr-2"></i> Registrarme
                            </button>
                        </form>
                    </div>

                    <!-- Beneficios -->
                    <div class="benefits-section">
                        <h3 class="text-xl font-bold mb-6 text-toro-dark">
                            Beneficios Exclusivos
                        </h3>

                        <ul class="space-y-4">
                            <li class="benefit-item">
                                <i class="fas fa-check-circle benefit-icon-check"></i>
                                <span>Descuento en tu primer pedido</span>
                            </li>
                            <li class="benefit-item">
                                <i class="fas fa-check-circle benefit-icon-check"></i>
                                <span>Acceso anticipado a nuevas funciones</span>
                            </li>
                            <li class="benefit-item">
                                <i class="fas fa-check-circle benefit-icon-check"></i>
                                <span>Promociones especiales solo para usuarios registrados</span>
                            </li>
                            <li class="benefit-item">
                                <i class="fas fa-check-circle benefit-icon-check"></i>
                                <span>Soporte prioritario 24/7</span>
                            </li>
                        </ul>

                        <!-- Elemento decorativo -->
                        <div class="mt-8 relative">
                            <div class="absolute -top-8 -right-8 w-24 h-24 bg-toro-green rounded-full opacity-10"></div>
                            <div class="absolute bottom-0 left-0 w-16 h-16 bg-toro-red rounded-full opacity-10"></div>

                            <div class="bg-white p-4 rounded-xl border border-toro-green border-opacity-30 relative z-10">
                                <p class="text-toro-dark">
                                    <i class="fas fa-lock text-toro-green mr-2"></i>
                                    Tus datos están protegidos y solo los usaremos para notificarte sobre el lanzamiento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-toro-dark">
                    Preguntas Frecuentes
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Todo lo que necesitas saber sobre Torogosv
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <!-- FAQ 1 -->
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center">
                        <span>¿Cuánto cuesta el servicio de entrega?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="px-6 pb-6 hidden">
                        <p class="text-gray-600">
                            El costo de entrega varía según la distancia y la demanda en ese momento. Puedes ver el costo exacto antes de confirmar tu pedido en la app.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center">
                        <span>¿Cómo puedo pagar mi pedido?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="px-6 pb-6 hidden">
                        <p class="text-gray-600">
                            Aceptamos múltiples métodos de pago: tarjeta de crédito/débito, PayPal, y efectivo al momento de la entrega.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center">
                        <span>¿Puedo programar entregas para más tarde?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="px-6 pb-6 hidden">
                        <p class="text-gray-600">
                            Sí! Puedes programar entregas hasta con 48 horas de anticipación. Selecciona la opción "Programar entrega" al hacer tu pedido.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center">
                        <span>¿Qué hago si tengo un problema con mi pedido?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="px-6 pb-6 hidden">
                        <p class="text-gray-600">
                            Contáctanos inmediatamente a través de la app o nuestro soporte al cliente. Resolveremos cualquier inconveniente en menos de 24 horas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection