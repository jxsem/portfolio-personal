<?php
// app/Http/Controllers/CvController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CvController extends Controller
{
    public function download(): StreamedResponse
    {
        $path = 'cv.pdf'; // Ruta dentro de storage/app/private/

        abort_unless(Storage::disk('local')->exists($path), 404);

        return Storage::disk('local')->download(
            $path,
            'CV-Jose-Manuel-Soldado.pdf' // Nombre que verá el usuario al descargar
        );
    }
}