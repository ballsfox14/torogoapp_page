<header class="sticky top-0 z-50 bg-white shadow-md relative">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo (imagen) -->
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo-torogo.png') }}" alt="ToroGoSV" class="h-10 w-auto">
        </a>

        <!-- Navegación escritorio -->
        <nav class="hidden md:flex space-x-8">
            <a href="#features" class="text-toro-dark hover:text-toro-green font-medium">Beneficios</a>
            <a href="#how-it-works" class="text-toro-dark hover:text-toro-green font-medium">Cómo Funciona</a>
            <a href="#benefits" class="text-toro-dark hover:text-toro-green font-medium">Ventajas</a>
            <a href="#faq" class="text-toro-dark hover:text-toro-green font-medium">Preguntas</a>
            <a href="#contact" class="text-toro-dark hover:text-toro-green font-medium">Contacto</a>
        </nav>

        <!-- Botones e icono móvil -->
        <div class="flex items-center space-x-4">
            <button class="bg-toro-green text-white px-4 py-2 rounded-full font-medium hidden md:block">
                Iniciar Sesión
            </button>
            <button id="mobileMenuButton" class="md:hidden text-toro-dark">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Menú móvil -->
        <div id="mobileMenu" class="mobile-menu md:hidden absolute top-full left-0 right-0 bg-white shadow-lg">
            <a href="#features" class="block px-4 py-3 text-toro-dark">Beneficios</a>
            <a href="#how-it-works" class="block px-4 py-3 text-toro-dark">Cómo Funciona</a>
            <a href="#benefits" class="block px-4 py-3 text-toro-dark">Ventajas</a>
            <a href="#faq" class="block px-4 py-3 text-toro-dark">Preguntas</a>
            <a href="#contact" class="block px-4 py-3 text-toro-dark">Contacto</a>
            <button class="w-full text-left px-4 py-3 bg-toro-green text-white font-medium">
                Iniciar Sesión
            </button>
        </div>
    </div>
</header>