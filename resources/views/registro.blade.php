<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina Tarot - Registro de Viajero</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between font-sans">

    <header class="p-5 border-b border-purple-900/40 bg-slate-900/50 backdrop-blur">
        <a href="{{ route('index') }}" class="text-2xl font-bold tracking-wider text-purple-400">✨ LUMINA TAROT</a>
    </header>

    <main class="flex-grow flex flex-col items-center justify-center p-6 my-6">
        <div class="w-full max-w-lg bg-slate-900/80 p-8 rounded-2xl border border-purple-500/30 shadow-2xl space-y-6">
            <div class="text-center space-y-2">
                <h2 class="text-3xl font-extrabold text-amber-200">Únete al Círculo</h2>
                <p class="text-slate-400 text-sm">Crea tu perfil para conectar con el tarot</p>
            </div>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-purple-300 uppercase mb-1">Nombre</label>
                        <input type="text" name="nombre" required class="w-full p-3 bg-slate-950 rounded-xl border border-purple-900 focus:outline-none focus:border-amber-400 text-slate-200">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-purple-300 uppercase mb-1">Apellido</label>
                        <input type="text" name="apellido" required class="w-full p-3 bg-slate-950 rounded-xl border border-purple-900 focus:outline-none focus:border-amber-400 text-slate-200">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-purple-300 uppercase mb-1">Nombre de Usuario</label>
                    <input type="text" name="usuario" required class="w-full p-3 bg-slate-950 rounded-xl border border-purple-900 focus:outline-none focus:border-amber-400 text-slate-200">
                </div>

                <div>
                    <label class="block text-xs font-medium text-purple-300 uppercase mb-1">Correo Electrónico</label>
                    <input type="email" name="email" required class="w-full p-3 bg-slate-950 rounded-xl border border-purple-900 focus:outline-none focus:border-amber-400 text-slate-200">
                </div>

                <div>
                    <label class="block text-xs font-medium text-purple-300 uppercase mb-1">Contraseña</label>
                    <input type="password" name="password" required class="w-full p-3 bg-slate-950 rounded-xl border border-purple-900 focus:outline-none focus:border-amber-400 text-slate-200">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-amber-500 hover:from-purple-500 hover:to-amber-400 text-slate-950 font-bold py-3 rounded-xl transition shadow-lg">
                    Completar Registro 🔮
                </button>
            </form>

            <div class="text-center text-xs text-slate-400 pt-2">
                ¿Ya tienes una cuenta? 
                <a href="{{ route('login') }}" class="text-amber-300 hover:underline">Inicia sesión</a>
            </div>
        </div>
    </main>

    <footer class="p-4 text-center text-xs text-slate-600 border-t border-purple-950/30">
        &copy; 2026 Lumina Tarot.
    </footer>
</body>
</html>