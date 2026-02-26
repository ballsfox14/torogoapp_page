@extends('layouts.app')

@section('title', 'Acuerdo de Licencia - ToroGoSV')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-4xl">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <h1 class="text-3xl md:text-4xl font-bold text-toro-dark mb-6">Acuerdo de Licencia para Usuarios de ToroGoSV</h1>
        <p class="text-gray-600 mb-8">Última actualización: {{ date('d/m/Y') }}</p>

        <div class="prose prose-lg text-gray-700 space-y-6">
            <p>Este Acuerdo de Licencia (el "Acuerdo") establece los términos y condiciones bajo los cuales los usuarios pueden registrarse y utilizar los servicios de ToroGoSV.</p>

            <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">1. Aceptación de los términos</h2>
            <p>Al marcar la casilla "Acepto el Acuerdo de Licencia" durante el registro, el usuario confirma que ha leído, entendido y acepta cumplir con todos los términos y condiciones establecidos en este documento.</p>

            <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">2. Tipos de usuarios y responsabilidades</h2>
            <p><strong>Clientes:</strong> Los clientes pueden utilizar la aplicación para solicitar entregas de comida y otros productos. Se comprometen a proporcionar información veraz y a utilizar el servicio de acuerdo con la ley.</p>
            <p><strong>Repartidores:</strong> Los repartidores aceptan que, en una fase posterior, deberán proporcionar documentación que acredite su identidad y la legalidad de su vehículo (licencia de conducir, seguro, etc.) para poder operar en la plataforma.</p>
            <p><strong>Empresas (restaurantes y tiendas):</strong> Las empresas aceptan que, en una fase posterior, deberán proporcionar información fiscal y comercial (NIT, registro mercantil, etc.) para formalizar su participación en la plataforma.</p>

            <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">3. Uso de la información</h2>
            <p>La información proporcionada por los usuarios será utilizada únicamente para los fines propios de la plataforma: gestionar entregas, comunicar novedades y, en su caso, verificar la identidad de repartidores y comercios. No compartiremos tus datos con terceros sin tu consentimiento, salvo obligación legal.</p>

            <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">4. Verificación y prevención de duplicados</h2>
            <p>Para garantizar la seguridad y calidad del servicio, ToroGoSV se reserva el derecho de solicitar documentación adicional a repartidores y empresas antes de activar sus cuentas. Los datos proporcionados serán verificados y se tomarán medidas para evitar cuentas duplicadas o fraudulentas.</p>

            <h2 class="text-2xl font-bold text-toro-dark mt-8 mb-4">5. Modificaciones del acuerdo</h2>
            <p>ToroGoSV podrá modificar este Acuerdo en cualquier momento. Las modificaciones serán comunicadas a los usuarios a través de la aplicación o por correo electrónico. El uso continuado de la plataforma implicará la aceptación de los cambios.</p>

            <p class="mt-8">Si tienes dudas sobre este Acuerdo, contáctanos en <strong>contacto@torogoapp.com</strong>.</p>
        </div>
    </div>
</div>
@endsection