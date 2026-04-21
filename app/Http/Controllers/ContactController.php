<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived; // Corregido el namespace
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
         Log::info('El formulario ha llegado al controlador');
        // Asegúrate de que estos nombres coincidan con el atributo 'name' de tu HTML
        $validated = $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'telefono' => 'nullable|numeric|max:9',
            'mensaje' => 'required|string',
        ]);

        //@dd($validated); // Esto te permitirá ver los datos validados antes de enviar el correo
        Log::info('Validación superada', $validated);
        try {
            Mail::to('josemanuel.soldado@outlook.es')->send(new ContactReceived($validated));
            return back()->with('success', '¡Mensaje enviado correctamente!');
            //return "Si veo esto, es problema del Mailer";
        } catch (\Exception $e) {
            // Esto te ayudará a ver si Mailtrap rechaza la conexión
            dd($e->getMessage());

            //return back()->withErrors(['mail' => 'Error al enviar el correo.']);
        }

        return back()->with('success', 'Tu mensaje ha sido enviado correctamente. ¡Gracias por contactarme!');
    }
}
