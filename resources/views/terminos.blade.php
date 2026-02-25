@extends('layouts.app')

@section('title', 'Términos y Condiciones - ToroGoSV')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-4xl">
    <h1 class="text-3xl md:text-4xl font-bold text-toro-dark mb-8">Términos y Condiciones</h1>
    
    <div class="prose prose-lg text-gray-700 space-y-6">
        <p class="text-gray-600">Última actualización: {{ date('d/m/Y') }}</p>
        
        <p>Bienvenido a ToroGoSV. Al acceder o utilizar nuestro sitio web y servicios, aceptas cumplir con estos Términos y Condiciones. Si no estás de acuerdo con alguna parte, no debes usar nuestros servicios.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Uso del sitio</h2>
        <p>Este sitio web tiene fines informativos y de registro para el lanzamiento de nuestra aplicación. No garantizamos la disponibilidad continua del servicio y nos reservamos el derecho de modificarlo o suspenderlo sin previo aviso.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Registro de usuarios</h2>
        <p>Al registrarte para recibir notificaciones, declaras que la información proporcionada es veraz y actual. Eres responsable de mantener la confidencialidad de tus datos. ToroGoSV no será responsable por el uso no autorizado de tu información.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Propiedad intelectual</h2>
        <p>Todo el contenido de este sitio (logos, textos, imágenes, diseño) es propiedad de ToroGoSV o tiene licencia para su uso. Queda prohibida la reproducción total o parcial sin autorización expresa.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Limitación de responsabilidad</h2>
        <p>En ningún caso ToroGoSV será responsable por daños indirectos, incidentales o consecuentes derivados del uso o la imposibilidad de uso de nuestros servicios.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Enlaces a terceros</h2>
        <p>Nuestro sitio puede contener enlaces a sitios web de terceros. No tenemos control sobre el contenido o prácticas de esos sitios y no asumimos responsabilidad por ellos.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Ley aplicable</h2>
        <p>Estos Términos se regirán e interpretarán de acuerdo con las leyes de la República de El Salvador. Cualquier disputa estará sujeta a la jurisdicción de los tribunales de San Salvador.</p>
        
        <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">Contacto</h2>
        <p>Si tienes preguntas sobre estos Términos, puedes contactarnos en <strong>contacto@torogoapp.com</strong>.</p>
    </div>
</div>
@endsection