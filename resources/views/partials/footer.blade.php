<footer id="contact" class="bg-toro-dark text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo y descripción -->
            <div>
                <a href="{{ route('home') }}" class="flex items-center mb-6">
                    <img src="{{ asset('images/logo-torogo.png') }}" alt="ToroGoSV" class="h-10 w-auto">
                </a>
                <p class="text-gray-300 mb-6">
                    La app de delivery más rápida y confiable, llevando tus pedidos favoritos a tu puerta.
                </p>
                <div class="flex space-x-4">
                    <!-- Redes sociales (completa los href cuando tengas las URLs) -->
                    <a href="https://www.facebook.com/torogoappsv/" class="text-gray-300 hover:text-white" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white" aria-label="X (Twitter)">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/torogoapp/" class="text-gray-300 hover:text-white" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/yerba-digital/" class="text-gray-300 hover:text-white" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Enlaces Rápidos -->
            <div>
                <h4 class="text-lg font-bold mb-6">Enlaces Rápidos</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Inicio</a></li>
                    <li><a href="#features" class="text-gray-300 hover:text-white">Beneficios</a></li>
                    <li><a href="#how-it-works" class="text-gray-300 hover:text-white">Cómo Funciona</a></li>
                    <li><a href="#faq" class="text-gray-300 hover:text-white">Preguntas Frecuentes</a></li>
                    <li><a href="{{ route('privacidad') }}" class="text-gray-300 hover:text-white">Política de Privacidad</a></li>
                    <li><a href="{{ route('terminos') }}" class="text-gray-300 hover:text-white">Términos y Condiciones</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h4 class="text-lg font-bold mb-6">Contáctanos</h4>
                <ul class="space-y-3">
                    <!-- Si deseas una ubicación genérica, descomenta la siguiente línea -->
                    {{-- <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-toro-green"></i>
                        <span class="text-gray-300">Servicio a domicilio en todo San Salvador</span>
                    </li> --}}
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt mt-1 mr-3 text-toro-green"></i>
                        <span class="text-gray-300">+503 7043-2564</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-toro-green"></i>
                        <span class="text-gray-300">contacto@torogoapp.com</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter (pendiente de implementar) -->
            {{--
            <div>
                <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                <p class="text-gray-300 mb-4">
                    Suscríbete para recibir promociones exclusivas.
                </p>
                <form class="flex">
                    <input type="email" placeholder="Tu correo" class="px-4 py-2 w-full rounded-l-lg focus:outline-none text-gray-800">
                    <button class="bg-toro-red px-4 rounded-r-lg">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            --}}
        </div>

        <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Torogosv. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>