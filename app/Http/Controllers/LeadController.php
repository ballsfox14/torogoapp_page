<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThanksForRegistering;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email',
            'phone' => 'required|string|max:20',
            'type' => 'required|in:client,driver,business',
            'business_name' => 'required_if:type,business|nullable|string|max:255',
            'vehicle_type' => 'required_if:type,driver|nullable|string|max:100',
            'additional_info' => 'nullable|string',
            'terms_accepted' => 'required|accepted',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Ingresa un correo válido.',
            'email.unique' => 'Este correo ya está registrado.',
            'phone.required' => 'El teléfono es obligatorio.',
            'type.required' => 'Debes seleccionar un tipo de usuario.',
            'business_name.required_if' => 'El nombre del negocio es obligatorio para empresas.',
            'vehicle_type.required_if' => 'El tipo de vehículo es obligatorio para repartidores.',
            'terms_accepted.required' => 'Debes aceptar el Acuerdo de Licencia.',
            'terms_accepted.accepted' => 'Debes aceptar el Acuerdo de Licencia.',
            'g-recaptcha-response.required' => 'Debes confirmar que no eres un robot.',
            'g-recaptcha-response.captcha' => 'Error en la verificación de reCAPTCHA. Intenta nuevamente.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $lead = Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'business_name' => $request->business_name,
            'vehicle_type' => $request->vehicle_type,
            'additional_info' => $request->additional_info,
            'terms_accepted' => true,
            'status' => 'pending'
        ]);

        Mail::to($lead->email)->send(new ThanksForRegistering($lead));

        return response()->json([
            'success' => true,
            'message' => '¡Gracias por registrarte! Revisa tu correo para más información.'
        ]);
    }
}