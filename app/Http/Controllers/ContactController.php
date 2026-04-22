<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived; // Corregido el namespace
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function store(Request $request)
    {
         Log::info('El formulario ha llegado al controlador');
        // Nombres coinciden con el atributo 'name' de tu HTML
        $validated = $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'telefono' => 'nullable|string|min:9|max:15', // Validación para el teléfono, opcional
            'mensaje' => 'required|string',
        ]);

        // 2. Preparas el texto plano para Telegram
    $texto = "🚀 *Nuevo mensaje de contacto*\n\n"
           . "📧 *Email:* " . $request->email . "\n"
           . "💬 *Mensaje:* " . $request->mensaje;

    // 3. Envío directo vía HTTP (Sustituye al Mail::to)
    Http::post("https://api.telegram.org/bot" . config('services.telegram.token') . "/sendMessage", [
        'chat_id' => config('services.telegram.chat_id'),
        'text' => $texto,
        'parse_mode' => 'Markdown',
    ]);

    return back()->with('success', '¡Gracias! Te responderé pronto.');
    }
}
