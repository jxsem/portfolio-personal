@extends('layouts.public')

@section('content')

{{-- SOBRE MÍ --}}
<section id="about" class="py-24 bg-slate-950">
    <div class="container mx-auto px-6 max-w-5xl"> {{-- Aumentado un poco el max-w para que respire --}}
        <span class="inline-block bg-blue-900/50 text-blue-400 text-xs font-medium tracking-widest uppercase px-3 py-1 rounded-full mb-6">Sobre mí</span>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            {{-- BLOQUE IZQUIERDA: TEXTO --}}
            <div>
                <h2 class="text-4xl font-medium tracking-tight text-white mb-8">
                    Mi trayectoria no ha sido <span class="text-blue-400">lineal</span>,<br>y esa es mi mayor ventaja.
                </h2>
                
                <div class="space-y-6 text-base text-slate-400 leading-relaxed">
                    <p>
                        Tras años optimizando procesos en diversos sectores, identifiqué que mi capacidad de resolución de problemas encontraba su máximo exponente en el desarrollo web.
                    </p>
                    <p>
                        He aprendido a pivotar, asimilar tecnologías complejas en tiempo récord y aportar una
                        <span class="text-blue-400">visión pragmática</span> que otros desarrolladores pasan por alto.
                        Este portfolio es la prueba de una transición ejecutada con disciplina.
                    </p>
                </div>
            </div>

            {{-- BLOQUE DERECHA: FOTO --}}
            <div class="flex justify-center md:justify-end">
                <div class="relative group max-w-xs">
                    {{-- Adorno visual opcional (brillo detrás de la foto) --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-sky-400 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    
                    <img src="{{ asset('img/mi-foto.jpg') }}" 
                         alt="Mi fotografía" 
                         class="relative w-full rounded-lg border border-slate-800 grayscale hover:grayscale-0 transition-all duration-500 shadow-2xl">
                </div>
            </div>
        </div>

        {{-- BLOQUE INFERIOR: SKILLS (Se mantiene igual pero ajustado al grid superior) --}}
        <div class="grid md:grid-cols-2 gap-8 mt-16 pt-12 border-t border-slate-800">
            <div>
                <h4 class="text-white font-medium mb-2 flex items-center gap-3">
                    <span class="w-6 h-0.5 bg-sky-400"></span> Adaptabilidad
                </h4>
                <p class="text-sm text-slate-500 leading-relaxed">Asimilo stacks tecnológicos en tiempo récord y opero en entornos de alta incertidumbre.</p>
            </div>
            <div>
                <h4 class="text-white font-medium mb-2 flex items-center gap-3">
                    <span class="w-6 h-0.5 bg-sky-400"></span> Resolución de Problemas
                </h4>
                <p class="text-sm text-slate-500 leading-relaxed">Enfoque en eficiencia técnica e impacto de negocio, evitando el exceso de ingeniería.</p>
            </div>
        </div>
    </div>
</section>

{{-- EXPERIENCIA --}}
<section id="experiencia" class="py-24 bg-slate-900/40">
    <div class="container mx-auto px-6 max-w-4xl">
        <span class="inline-block bg-blue-900/50 text-blue-400 text-xs font-medium tracking-widest uppercase px-3 py-1 rounded-full mb-6">Experiencia</span>
        <h2 class="text-4xl font-medium tracking-tight text-white mb-12">Experiencia Laboral</h2>

        <div class="relative pl-8 border-l-2 border-slate-800">
            <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-blue-600 ring-4 ring-blue-600/20"></span>
            <h3 class="text-xl font-medium text-white">Desarrollador Web Full Stack</h3>
            <span class="inline-block mt-2 mb-4 bg-slate-800 text-blue-400 text-xs px-3 py-1 rounded-full italic">Prácticas</span>

            <div class="space-y-4 text-sm text-slate-400 leading-relaxed">
                <p>
                    Saneé y fortalecí la operativa digital, neutralizando intentos de fraude mediante la
                    <code class="bg-slate-800 text-sky-300 px-1.5 py-0.5 rounded text-xs">Page Visibility API</code>
                    para auditoría en tiempo real. <br></br>Desarrollé un sistema para ponentes, en el que cada ponente tenía un panel de control con su información de su charla, y un sistema de gestión de la mesa. <br></br>Asímismo, implementé una relación de gestión de usuarios con roles y permisos, y un sistema de gestión de eventos para la organización.
                </p>
                <p>
                    Desarrollé un ecosistema de intercambio de archivos en
                    <code class="bg-slate-800 text-sky-300 px-1.5 py-0.5 rounded text-xs">Laravel</code>
                    que eliminó vulnerabilidades físicas (USB), con APIs REST propias para procesamiento multimedia.
                </p>

                <p>
                    Todo trabajo se realizó con un enfoque de <code class="bg-slate-800 text-sky-300 px-1.5 py-0.5 rounded text-xs">Clean Code</code> y por supuesto, con control de versiones en <code class="bg-slate-800 text-sky-300 px-1.5 py-0.5 rounded text-xs">Git</code> para garantizar calidad y trazabilidad.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- PROYECTOS --}}
<section id="proyectos" class="py-24 bg-slate-950">
    <div class="container mx-auto px-6 max-w-5xl">
        <div class="text-center mb-14">
            <span class="inline-block bg-blue-900/50 text-blue-400 text-xs font-medium tracking-widest uppercase px-3 py-1 rounded-full mb-4">Proyectos</span>
            <h2 class="text-4xl font-medium tracking-tight text-white">Proyectos Seleccionados</h2>
            <p class="text-slate-500 mt-4 max-w-md mx-auto text-sm leading-relaxed">
                Estos proyectos reflejan mi capacidad para resolver problemas complejos con soluciones técnicas elegantes y eficientes.
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            {{-- Tarjeta 1 --}}
            <div class="group flex flex-col bg-slate-900 border border-slate-800 p-6 rounded-2xl hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1">
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">Laravel</span>
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">PHP</span>
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">REST API</span>
                </div>
                <h3 class="text-base font-medium text-white mb-3 group-hover:text-blue-400 transition-colors leading-snug">
                    Sistema de Automatización Financiera
                </h3>
                <p class="text-sm text-slate-500 leading-relaxed flex-1 mb-6">
                    Centralización de servicios digitales en Laravel, eliminando el error humano y blindando la privacidad de datos sensibles.
                </p>
                <div class="flex flex-col gap-2 mt-auto pt-4 border-t border-slate-800">
                    <a href="https://github.com/jxsem/the-splitter" target="_blank" class="text-[11px] font-semibold uppercase tracking-widest text-sky-400 hover:text-sky-300 transition-colors">GitHub Code →</a>
                    <a href="https://the-splitter.onrender.com" target="_blank" class="text-[11px] font-semibold uppercase tracking-widest text-slate-600 hover:text-slate-300 transition-colors">Live Demo</a>
                </div>
            </div>

            {{-- Tarjeta 2 --}}
            <div class="group flex flex-col bg-slate-900 border border-slate-800 p-6 rounded-2xl hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1">
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">Apps Script</span>
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">Google Sheets</span>
                </div>
                <h3 class="text-base font-medium text-white mb-3 group-hover:text-blue-400 transition-colors leading-snug">
                    Motor de Cuadrantes Inteligente
                </h3>
                <p class="text-sm text-slate-500 leading-relaxed flex-1 mb-6">
                    Algoritmo para gestión de turnos complejos, garantizando cumplimiento de contratos y equilibrio laboral automatizado.
                </p>
                <div class="flex flex-col gap-2 mt-auto pt-4 border-t border-slate-800">
                    <a href="https://github.com/jxsem/Automatic-Schedule-Generator" target="_blank" class="text-[11px] font-semibold uppercase tracking-widest text-sky-400 hover:text-sky-300 transition-colors">GitHub Code →</a>
                    <a href="https://docs.google.com/spreadsheets/d/1bm_D9lAAzFQcppPQNViYDqoAkWmM-ozvwbovZmP_I-E/edit?usp=sharing" target="_blank" class="text-[11px] font-semibold uppercase tracking-widest text-slate-600 hover:text-slate-300 transition-colors">Live Demo</a>
                </div>
            </div>

            {{-- Tarjeta 3 --}}
            <div class="group flex flex-col bg-slate-900 border border-slate-800 p-6 rounded-2xl hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1">
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">Spring Boot</span>
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">Java</span>
                    <span class="bg-blue-950 text-blue-400 text-[10px] font-medium px-2 py-0.5 rounded-full">JavaScript</span>
                </div>
                <h3 class="text-base font-medium text-white mb-3 group-hover:text-blue-400 transition-colors leading-snug">
                    E-commerce de Alta Concurrencia
                </h3>
                <p class="text-sm text-slate-500 leading-relaxed flex-1 mb-6">
                    Arquitectura Spring Boot + JS con <em class="text-slate-400 not-italic">Pessimistic Locking</em> para evitar Race Conditions en stock bajo alta demanda.
                </p>
                <div class="flex flex-col gap-2 mt-auto pt-4 border-t border-slate-800">
                    <a href="https://github.com/jxsem/Supermarket-web-application" target="_blank" class="text-[11px] font-semibold uppercase tracking-widest text-sky-400 hover:text-sky-300 transition-colors">GitHub Code →</a>
                    <a href="#" target="_blank" class="text-[11px] font-semibold uppercase tracking-widest text-slate-600 hover:text-slate-300 transition-colors">Live Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CONTACTO --}}
<section id="contacto" class="py-24 bg-slate-900/40">
    <div class="container mx-auto px-6 text-center">
        <span class="inline-block bg-blue-900/50 text-blue-400 text-xs font-medium tracking-widest uppercase px-3 py-1 rounded-full mb-6">Contacto</span>
        <h2 class="text-4xl font-medium tracking-tight text-white mb-3">¿Hablamos?</h2>
        <p class="text-slate-500 mb-10 max-w-sm mx-auto text-sm leading-relaxed">
            Estoy abierto a propuestas donde la resolución de problemas técnicos sea la prioridad.
        </p>
        
        <form action="{{ route('contact.store') }}" method="POST" class="max-w-md mx-auto bg-slate-900 border border-slate-800 p-8 rounded-2xl text-left">
            @csrf
            <div class="mb-4">
                <input type="text" name="nombre" placeholder="Tu nombre"
                    class="w-full bg-slate-950 border border-slate-800 focus:border-blue-600 outline-none text-slate-200 placeholder-slate-600 text-sm px-4 py-3 rounded-lg transition-colors">
            </div>
            <div class="mb-4">
                <input type="email" name="email" placeholder="Tu correo electrónico"
                    class="w-full bg-slate-950 border border-slate-800 focus:border-blue-600 outline-none text-slate-200 placeholder-slate-600 text-sm px-4 py-3 rounded-lg transition-colors">
            </div>
            <div class="mb-6">
                <textarea name="mensaje" rows="4" placeholder="Tu mensaje..."
                    class="w-full bg-slate-950 border border-slate-800 focus:border-blue-600 outline-none text-slate-200 placeholder-slate-600 text-sm px-4 py-3 rounded-lg transition-colors resize-none"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 active:scale-[.98] text-white text-sm font-medium py-3 rounded-lg transition-all duration-200">
                Enviar mensaje
            </button>
        </form>
    </div>
</section>

@endsection