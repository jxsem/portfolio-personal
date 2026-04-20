<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

//Parte principal del proyecto, donde se muestra la vista principal del proyecto
Route::get('/', [ProjectController::class, 'index'])->name('portfolio.index');

// Parte privada del proyecto, donde se muestra la vista del panel de administración para el usuario autenticado
// Se utiliza el middleware 'auth' para asegurar que solo los usuarios autenticados puedan acceder a estas rutas
// Se utiliza el middleware 'verified' para asegurar que solo los usuarios con correo electrónico verificado puedan acceder a estas rutas
// Se utiliza el prefijo 'admin' para agrupar todas las rutas relacionadas con el panel de administración
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/', [ProjectController::class, 'adminIndex'])->name('admin.index');
    Route::get('/create', [ProjectController::class, 'create'])->name('profile.create');
    Route::post('/store', [ProjectController::class, 'store'])->name('profile.store');
    Route::put('/edit', [ProjectController::class, 'edit'])->name('profile.edit');
    Route::put('/update', [ProjectController::class, 'update'])->name('profile.update');
    Route::delete('/destroy', [ProjectController::class, 'destroy'])->name('profile.destroy');
});

// Ruta para el formulario
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');


require __DIR__.'/auth.php';
