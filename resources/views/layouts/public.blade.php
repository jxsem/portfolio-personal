<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Portfolio de Jose Manuel</title>
</head>
<body class="bg-slate-950 text-slate-400">

<header class="bg-slate-950 border-b border-slate-800/60 sticky top-0 z-10">
  <div class="container mx-auto px-6 max-w-5xl h-14 flex items-center justify-between">
    <span class="text-slate-100 font-medium text-base tracking-tight">Jose Manuel Soldado</span>
    <nav class="flex gap-6">
      <a href="#about" class="text-sm text-slate-400 hover:text-white transition-colors">Inicio</a>
      <a href="#proyectos" class="text-sm text-slate-400 hover:text-white transition-colors">Proyectos</a>
      <a href="#contacto" class="text-sm text-slate-400 hover:text-white transition-colors">Contacto</a>
      <a href="{{ asset('docs/CV-Jose-Manuel-Soldado.pdf') }}" target="_blank" class="flex items-center gap-2 text-sm text-slate-400 hover:text-white transition-colors">
            <span>Curriculum</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
        </a>
    </nav>
  </div>
</header>


<main>
  {{-- Bloque para Mensaje de Éxito --}}
        @if(session('success'))
            <div id="success-alert" class="max-w-lg mx-auto mb-6 p-4 bg-emerald-500/10 border border-emerald-500/50 text-emerald-400 rounded-xl flex items-center gap-3 transition-opacity duration-1000 ease-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>

            <script>
                setTimeout(() => {
                    const alert = document.getElementById('success-alert');
                    if (alert) {
                        // 1. Aplicamos la opacidad 0 (la clase duration-1000 hará el resto)
                        alert.style.opacity = '0';
                        
                        // 2. Esperamos a que termine la animación (1s) para quitarlo del DOM
                        setTimeout(() => {
                            alert.remove();
                        }, 1000); 
                    }
                }, 4000); // Se empieza a desvanecer a los 4 segundos
            </script>
        @endif

        {{-- Bloque para Errores de Validación (por si algo falla) --}}
        @if($errors->any())
            <div class="max-w-lg mx-auto mb-6 p-4 bg-rose-500/10 border border-rose-500/50 text-rose-400 rounded-xl">
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  @yield('content')</main>

<footer class="bg-slate-900 border-t border-slate-800 py-6 text-center text-xs text-slate-600">
  &copy; 2026 Jose Manuel. Todos los derechos reservados.
</footer>
</body>
</html>