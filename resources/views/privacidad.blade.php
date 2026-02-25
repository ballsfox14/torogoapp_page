@extends('layouts.app')

@section('title', 'Política de Privacidad - ToroGoSV')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-4xl">
    <h1 class="text-3xl md:text-4xl font-bold text-toro-dark mb-8">Política de Privacidad</h1>
    
    <div class="prose prose-lg text-gray-700 space-y-6">
        <p class="text-gray-600">Última actualización: {{ date('d/m/Y') }}</p>
        
        <p>En ToroGoSV, accesible desde torogoapp.com, una de nuestras principales prioridades es la privacidad de nuestros visitantes. Este documento de Política de Privacidad contiene tipos de información que es recopilada y registrada por ToroGoSV y cómo la usamos.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Información que recopilamos</h2>
        <p>Cuando te registras para recibir notificaciones sobre nuestro lanzamiento, podemos solicitar tu nombre, correo electrónico, número de teléfono y otra información relevante para el proceso de registro. Esta información se utiliza para:</p>
        <ul class="list-disc pl-6 space-y-2">
            <li>Enviarte actualizaciones sobre el lanzamiento de la aplicación.</li>
            <li>Ofrecerte descuentos y promociones exclusivas.</li>
            <li>Mejorar nuestro servicio y personalizar tu experiencia.</li>
        </ul>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Cómo protegemos tu información</h2>
        <p>Implementamos medidas de seguridad técnicas y organizativas para proteger tus datos personales contra acceso no autorizado, alteración, divulgación o destrucción. Utilizamos protocolos de encriptación SSL y almacenamos tus datos en servidores seguros.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Compartir información con terceros</h2>
        <p>No vendemos, intercambiamos ni transferimos tu información personal a terceros sin tu consentimiento, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Uso de cookies</h2>
        <p>Utilizamos cookies para mejorar tu experiencia en nuestro sitio, analizar el tráfico y personalizar el contenido. Puedes configurar tu navegador para rechazar todas las cookies o para indicar cuándo se está enviando una cookie.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Tus derechos</h2>
        <p>Tienes derecho a acceder, corregir o eliminar tu información personal en cualquier momento. Para ejercer estos derechos, contáctanos a través de soporte@torogosv.com.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Cambios a esta política</h2>
        <p>Podemos actualizar nuestra Política de Privacidad periódicamente. Te notificaremos cualquier cambio publicando la nueva política en esta página.</p>
        
        <p class="mt-8">Si tienes preguntas sobre esta política de privacidad, contáctanos en <strong>contacto@torogoapp.com</strong>.</p>
    </div>
</div>
@endsection