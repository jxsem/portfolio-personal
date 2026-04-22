<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Log::info('El formulario ha llegado al controlador');

        // 1. Validación
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'telefono' => 'nullable|string|min:9|max:15',
            'mensaje'  => 'required|string',
        ]);

        // 2. Preparar el texto (Usamos HTML para evitar errores de caracteres especiales en Markdown)
        $texto = "🚀 <b>Nuevo mensaje de contacto</b>\n\n"
               . "👤 <b>Nombre:</b> " . htmlspecialchars($request->nombre) . "\n"
               . "📧 <b>Email:</b> " . htmlspecialchars($request->email) . "\n"
               . "📞 <b>Teléfono:</b> " . htmlspecialchars($request->telefono ?? 'No proporcionado') . "\n\n"
               . "💬 <b>Mensaje:</b>\n" . htmlspecialchars($request->mensaje);

        // 3. Variables de entorno
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        // Log de depuración (verificar si Railway lee las variables)
        Log::info('Intentando enviar Telegram a ID: ' . ($chatId ?? 'VACÍO'));

        // 4. Envío vía HTTP
        $response = Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text'    => $texto,
            'parse_mode' => 'HTML', // Cambiado a HTML para mayor estabilidad
        ]);

        // 5. Gestión de errores en Logs
        if ($response->failed()) {
            Log::error('Fallo en Telegram. Respuesta: ' . $response->body());
        } else {
            Log::info('Mensaje enviado con éxito a Telegram');
        }

        return back()->with('success', '¡Gracias! Te responderé pronto.');
    }
}