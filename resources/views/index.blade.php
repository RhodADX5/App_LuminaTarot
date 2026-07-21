<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina Tarot - Bienvenido Viajero</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between font-sans">

    <header class="p-5 flex justify-between items-center border-b border-purple-900/40 bg-slate-900/50 backdrop-blur">
        <h1 class="text-2xl font-bold tracking-wider text-purple-400">✨ LUMINA TAROT</h1>
        <nav class="space-x-4">
            <a href="{{ route('index') }}" class="text-sm hover:text-purple-400 transition">Inicio</a>
            <a href="{{ route('login') }}" class="bg-purple-700 hover:bg-purple-600 px-4 py-2 rounded-full text-sm font-semibold transition shadow-lg shadow-purple-900/50">Iniciar Sesión</a>
        </nav>
    </header>

    <main class="flex-grow flex flex-col items-center justify-center p-6 text-center max-w-2xl mx-auto space-y-8">
        <div class="space-y-3">
            <p class="text-purple-400 font-medium tracking-widest text-sm uppercase">El cosmos tiene un mensaje para ti</p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-amber-200 to-purple-400">
                ¡Bienvenido, viajero!
            </h2>
            <p class="text-slate-400 text-lg">
                Despeja tu mente y formula tu primera pregunta al universo.
            </p>
        </div>

        <div class="w-full bg-slate-900/60 p-6 rounded-2xl border border-purple-500/20 shadow-xl backdrop-blur-sm">
            <form id="formularioPregunta" class="space-y-4">
                <textarea 
                    id="preguntaPrueba"
                    rows="3" 
                    class="w-full p-4 bg-slate-950 rounded-xl border border-purple-900 focus:outline-none focus:border-amber-400 text-slate-200 placeholder-slate-600 resize-none"
                    placeholder="Ej. ¿Qué energías me depara el destino en el ámbito laboral este mes?..."
                ></textarea>
                <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-amber-500 hover:from-purple-500 hover:to-amber-400 text-slate-950 font-bold py-3 rounded-xl transition-all shadow-lg">
                    Consultar a las cartas 🔮
                </button>
            </form>
        </div>
    </main>

    <!-- Modal emergente para invitar a registrarse/iniciar sesión -->
    <div id="modalLogin" class="fixed inset-0 bg-black/80 backdrop-blur-md flex items-center justify-center p-4 hidden opacity-0 transition-opacity duration-300">
        <div class="bg-slate-900 border border-amber-500/30 p-8 rounded-2xl max-w-md w-full text-center space-y-6 shadow-2xl">
            <span class="text-4xl">🌌</span>
            <h3 class="text-2xl font-bold text-amber-300">Tu consulta ha sido enviada al universo</h3>
            <p class="text-slate-300 text-sm leading-relaxed">
                Para recibir la interpretación completa y realizar tus 3 preguntas formales, únete a nuestro círculo.
            </p>
            <div class="flex flex-col space-y-3">
                <a href="{{ route('login') }}" class="bg-purple-600 hover:bg-purple-500 text-white font-semibold py-3 rounded-xl transition">
                    Iniciar Sesión
                </a>
                <a href="{{ route('registro') }}" class="bg-transparent border border-purple-500/40 hover:border-purple-500 text-purple-300 font-semibold py-3 rounded-xl transition text-sm">
                    ¿No tienes cuenta? Regístrate gratis
                </a>
            </div>
        </div>
    </div>

    <footer class="p-4 text-center text-xs text-slate-600 border-t border-purple-950/30">
        &copy; 2026 Lumina Tarot.
    </footer>

    <script>
        const formulario = document.getElementById('formularioPregunta');
        const modal = document.getElementById('modalLogin');

        formulario.addEventListener('submit', function(e) {
            e.preventDefault();
            const textoPregunta = document.getElementById('preguntaPrueba').value.trim();
            if(textoPregunta === "") {
                alert("Por favor, escribe tu consulta.");
                return;
            }
            modal.classList.remove('hidden');
            setTimeout(() => { modal.classList.remove('opacity-0'); }, 10);
        });
    </script>
</body>
</html>