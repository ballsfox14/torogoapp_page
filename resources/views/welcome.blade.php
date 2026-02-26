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
                <h1 class="text-4xl md:text-6xl font-bold mb-6 text-toro-dark">
                    Pide comida de tus restaurantes favoritos en Chalatenango con 
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
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=768&q=80" alt="Interfaz de la app ToroGoSV mostrando comida" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-8 -left-8 w-24 h-24 bg-toro-yellow rounded-full opacity-20"></div>
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-toro-red rounded-full opacity-20"></div>
                <div class="absolute top-1/4 -left-10 w-16 h-16 bg-toro-green rounded-full opacity-20"></div>
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
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-toro-dark">Por qué elegir Torogosv</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">La solución de delivery más rápida y confiable con beneficios exclusivos para todos</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-green bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-bolt text-3xl text-toro-green"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Entrega Express</h3>
                    <p class="text-gray-600">Recibe tus pedidos en menos de 30 minutos con nuestro servicio prioritario.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-red bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-map-marker-alt text-3xl text-toro-red"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Seguimiento en Vivo</h3>
                    <p class="text-gray-600">Sigue a tu repartidor en tiempo real desde la app hasta tu puerta.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-yellow bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-utensils text-3xl text-toro-yellow"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Restaurantes locales</h3>
                    <p class="text-gray-600">Selección exclusiva de los mejores restaurantes de Chalatenango. ¡Pronto más opciones!</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl">
                    <div class="w-20 h-20 bg-toro-green bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="feature-icon fas fa-shield-alt text-3xl text-toro-green"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-toro-dark">Pago Seguro</h3>
                    <p class="text-gray-600">Transacciones 100% seguras con múltiples opciones de pago disponibles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section id="how-it-works" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-toro-dark">Así de fácil es usar Torogosv</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Tu satisfacción en solo tres pasos</p>
            </div>
            <div class="delivery-process max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="w-16 h-16 bg-toro-green rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">1</div>
                        <h3 class="text-xl font-bold mb-3 text-toro-dark">Descarga la App</h3>
                        <p class="text-gray-600 mb-4">Disponible en iOS y Android. Regístrate en segundos.</p>
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-3xl text-toro-green"></i>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="w-16 h-16 bg-toro-yellow rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">2</div>
                        <h3 class="text-xl font-bold mb-3 text-toro-dark">Elige tu pedido</h3>
                        <p class="text-gray-600 mb-4">Explora cientos de opciones y personaliza tu pedido.</p>
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-search text-3xl text-toro-yellow"></i>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="w-16 h-16 bg-toro-red rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">3</div>
                        <h3 class="text-xl font-bold mb-3 text-toro-dark">Disfruta</h3>
                        <p class="text-gray-600 mb-4">Recibe tu pedido caliente y listo para disfrutar.</p>
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

    <!-- Formulario de Registro (con campos condicionales + modal) -->
    <section id="contactForm" class="py-20 bg-gradient-to-r from-toro-green to-toro-dark relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-5">
            <div class="absolute top-20 left-10 w-24 h-24 rounded-full bg-white"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 rounded-full bg-white"></div>
            <div class="absolute top-1/3 right-1/4 w-16 h-16 rounded-full bg-white"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="form-container">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Formulario -->
                    <div class="form-section">
                        <div class="text-center mb-8">
                            <div class="inline-block bg-toro-green text-white font-bold py-1 px-4 rounded-full mb-4">
                                <i class="fas fa-hourglass-half mr-2"></i> Próximamente
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold mb-3 text-toro-dark">Sé el primero en probar ToroGosv</h2>
                            <p class="text-gray-600">Regístrate ahora y recibe una notificación exclusiva cuando lancemos nuestra aplicación, además de un descuento especial para tu primer pedido.</p>
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
                                        <input type="radio" name="type" id="typeClient" value="client" class="h-5 w-5 text-toro-green focus:ring-toro-green" checked>
                                        <span class="ml-3 text-gray-700">Ser cliente</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="type" id="typeDriver" value="driver" class="h-5 w-5 text-toro-green focus:ring-toro-green">
                                        <span class="ml-3 text-gray-700">Ser repartidor</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="type" id="typeBusiness" value="business" class="h-5 w-5 text-toro-green focus:ring-toro-green">
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

                            <!-- Información adicional (opcional) -->
                            <div>
                                <label class="block text-toro-dark font-medium mb-2">Información adicional (opcional)</label>
                                <textarea name="additional_info" rows="3" placeholder="Comentarios o preguntas..." class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-toro-green focus:border-transparent"></textarea>
                            </div>

                            <!-- Checkbox de aceptación de acuerdo (con enlace y modal al hacer clic en el checkbox) -->
                            <div class="mt-4">
                                <label class="flex items-start">
                                    <input type="checkbox" id="termsCheckbox" name="terms_accepted" value="1" class="mt-1 h-5 w-5 text-toro-green focus:ring-toro-green rounded" required onclick="openAgreementModal()">
                                    <span class="ml-3 text-sm text-gray-700">
                                        Acepto el 
                                        <a href="{{ route('acuerdo') }}" target="_blank" class="text-toro-green hover:underline font-medium">Acuerdo de Licencia</a>.
                                    </span>
                                </label>
                                <p class="text-xs text-gray-500 mt-1">Al marcar la casilla, podrás leer el acuerdo en una ventana emergente.</p>
                            </div>

                            <!-- reCAPTCHA -->
                            <div class="g-recaptcha mt-4" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>

                            <!-- Botón de registro -->
                            <button type="submit" class="btn-primary w-full text-white font-bold py-4 px-8 rounded-full text-lg mt-6">
                                <i class="fas fa-paper-plane mr-2"></i> Registrarme
                            </button>
                        </form>
                    </div>
                    <!-- Beneficios -->
                    <div class="benefits-section">
                        <h3 class="text-xl font-bold mb-6 text-toro-dark">Beneficios Exclusivos</h3>
                        <ul class="space-y-4">
                            <li class="benefit-item"><i class="fas fa-check-circle benefit-icon-check"></i><span>Descuento en tu primer pedido</span></li>
                            <li class="benefit-item"><i class="fas fa-check-circle benefit-icon-check"></i><span>Acceso anticipado a nuevas funciones</span></li>
                            <li class="benefit-item"><i class="fas fa-check-circle benefit-icon-check"></i><span>Promociones especiales solo para usuarios registrados</span></li>
                            <li class="benefit-item"><i class="fas fa-check-circle benefit-icon-check"></i><span>Soporte prioritario 24/7</span></li>
                        </ul>
                        <div class="mt-8 relative">
                            <div class="absolute -top-8 -right-8 w-24 h-24 bg-toro-green rounded-full opacity-10"></div>
                            <div class="absolute bottom-0 left-0 w-16 h-16 bg-toro-red rounded-full opacity-10"></div>
                            <div class="bg-white p-4 rounded-xl border border-toro-green border-opacity-30 relative z-10">
                                <p class="text-toro-dark"><i class="fas fa-lock text-toro-green mr-2"></i>Tus datos están protegidos y solo los usaremos para notificarte sobre el lanzamiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal del Acuerdo de Licencia -->
    <div id="agreementModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden" onclick="if(event.target === this) closeAgreementModal()">
        <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-lg bg-white">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-toro-dark">Acuerdo de Licencia</h3>
                <button onclick="closeAgreementModal()" class="text-gray-500 hover:text-gray-700"><i class="fas fa-times text-2xl"></i></button>
            </div>
            <div class="overflow-y-auto max-h-96 prose prose-sm text-gray-700">
                <h4>Acuerdo para Usuarios de ToroGoSV</h4>
                <p>Este Acuerdo de Licencia (el "Acuerdo") establece los términos y condiciones bajo los cuales los usuarios pueden registrarse y utilizar los servicios de ToroGoSV.</p>
                <h5 class="font-bold mt-4">1. Aceptación de los términos</h5>
                <p>Al marcar la casilla "Acepto el Acuerdo de Licencia" durante el registro, el usuario confirma que ha leído, entendido y acepta cumplir con todos los términos y condiciones establecidos en este documento.</p>
                <h5 class="font-bold mt-4">2. Tipos de usuarios y responsabilidades</h5>
                <p><strong>Clientes:</strong> Los clientes pueden utilizar la aplicación para solicitar entregas de comida y otros productos. Se comprometen a proporcionar información veraz y a utilizar el servicio de acuerdo con la ley.</p>
                <p><strong>Repartidores:</strong> Los repartidores aceptan que, en una fase posterior, deberán proporcionar documentación que acredite su identidad y la legalidad de su vehículo (licencia de conducir, seguro, etc.) para poder operar en la plataforma.</p>
                <p><strong>Empresas:</strong> Las empresas aceptan que, en una fase posterior, deberán proporcionar información fiscal y comercial (NIT, registro mercantil, etc.) para formalizar su participación en la plataforma.</p>
                <h5 class="font-bold mt-4">3. Uso de la información</h5>
                <p>La información proporcionada por los usuarios será utilizada únicamente para los fines propios de la plataforma: gestionar entregas, comunicar novedades y, en su caso, verificar la identidad de repartidores y comercios. No compartiremos tus datos con terceros sin tu consentimiento, salvo obligación legal.</p>
                <h5 class="font-bold mt-4">4. Verificación y prevención de duplicados</h5>
                <p>Para garantizar la seguridad y calidad del servicio, ToroGoSV se reserva el derecho de solicitar documentación adicional a repartidores y empresas antes de activar sus cuentas. Los datos proporcionados serán verificados y se tomarán medidas para evitar cuentas duplicadas o fraudulentas.</p>
                <h5 class="font-bold mt-4">5. Modificaciones del acuerdo</h5>
                <p>ToroGoSV podrá modificar este Acuerdo en cualquier momento. Las modificaciones serán comunicadas a los usuarios a través de la aplicación o por correo electrónico. El uso continuado de la plataforma implicará la aceptación de los cambios.</p>
                <p class="mt-4">Si tienes dudas sobre este Acuerdo, contáctanos en <strong>contacto@torogoapp.com</strong>.</p>
                <p class="text-xs text-gray-500 mt-4">Última actualización: {{ date('d/m/Y') }}</p>
            </div>
            <div class="mt-4 flex justify-end space-x-3">
                <button onclick="closeAgreementModal()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-full hover:bg-gray-400">Cancelar</button>
                <button onclick="acceptAgreement()" class="px-4 py-2 bg-toro-green text-white rounded-full hover:bg-green-600">Aceptar</button>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-toro-dark">Preguntas Frecuentes</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Todo lo que necesitas saber sobre Torogosv</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center"><span>¿Cuánto cuesta el servicio de entrega?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="px-6 pb-6 hidden"><p class="text-gray-600">El costo de entrega varía según la distancia y la demanda en ese momento. Puedes ver el costo exacto antes de confirmar tu pedido en la app.</p></div>
                </div>
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center"><span>¿Cómo puedo pagar mi pedido?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="px-6 pb-6 hidden"><p class="text-gray-600">Aceptamos múltiples métodos de pago: tarjeta de crédito/débito, PayPal, y efectivo al momento de la entrega.</p></div>
                </div>
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center"><span>¿Puedo programar entregas para más tarde?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="px-6 pb-6 hidden"><p class="text-gray-600">Sí! Puedes programar entregas hasta con 48 horas de anticipación. Selecciona la opción "Programar entrega" al hacer tu pedido.</p></div>
                </div>
                <div class="faq-item bg-toro-light mb-4 rounded-lg overflow-hidden">
                    <button class="w-full text-left p-6 font-medium text-lg flex justify-between items-center"><span>¿Qué hago si tengo un problema con mi pedido?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="px-6 pb-6 hidden"><p class="text-gray-600">Contáctanos inmediatamente a través de la app o nuestro soporte al cliente. Resolveremos cualquier inconveniente en menos de 24 horas.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script para el modal y campos condicionales -->
    <script>
        // Modal functions
        function openAgreementModal() {
            document.getElementById('agreementModal').classList.remove('hidden');
        }
        function closeAgreementModal() {
            document.getElementById('agreementModal').classList.add('hidden');
        }
        function acceptAgreement() {
            document.getElementById('termsCheckbox').checked = true;
            closeAgreementModal();
        }
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !document.getElementById('agreementModal').classList.contains('hidden')) {
                closeAgreementModal();
            }
        });

        // Campos condicionales para tipo de usuario
        document.addEventListener('DOMContentLoaded', function() {
            const typeRadios = document.querySelectorAll('input[name="type"]');
            const businessFields = document.getElementById('businessFields');
            const driverFields = document.getElementById('driverFields');
            const businessInput = document.querySelector('input[name="business_name"]');
            const driverSelect = document.querySelector('select[name="vehicle_type"]');

            function toggleFields() {
                const selectedType = document.querySelector('input[name="type"]:checked').value;
                
                businessFields.style.display = selectedType === 'business' ? 'block' : 'none';
                driverFields.style.display = selectedType === 'driver' ? 'block' : 'none';
                
                if (businessInput) businessInput.required = (selectedType === 'business');
                if (driverSelect) driverSelect.required = (selectedType === 'driver');
            }

            typeRadios.forEach(radio => {
                radio.addEventListener('change', toggleFields);
            });

            toggleFields(); // Inicializar
        });
    </script>
@endsection