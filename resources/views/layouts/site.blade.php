<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('titulo', 'Portal Notícias')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <div>
                <img src="img/logo-portal-br-light.svg" alt="Portal de Notícias">
            </div>
            <nav>
                <ul class="flex gap-x-5 text-slate-800 items-center">
                
                    <li><a href="/">Home</a></li>
                    <li><a href="/contato">Contato</a></li>
                    <li><a href="#" class="inline-block bg-blue-500 text-white py-1 px-5 rounded-md">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="flex-1 max-w-7xl mx-auto my-10 px-4">
       
        @yield('conteudo')

    </main> 
    <footer class="bg-slate-900 text-slate-400 shadow-sm mt-10">
       <div class="max-w-7xl mx-auto py-4">
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div>
                <h2 class="font-semibold text-white mb-2">PortalBR</h2>
                <p>Plataforma criada em aula para aprender Laravel</p>
            </div>
            <div>
                <h2 class="font-semibold text-white mb-2">Navegar</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </div>
            <div>
                <h2 class="font-semibold text-white mb-2">Tags</h2>
                <div class="flex gap-6">
                    <span class="bg-slate-800 rouded-md px-3 py-1.5 text-slate-200  rounded-full">PHP 8</span>
                    <span class="bg-slate-800 rouded-md px-3 py-1.5 text-slate-200  rounded-full">SQL</span>
                    <span class="bg-slate-800 rouded-md px-3 py-1.5 text-slate-200  rounded-full">Laravel</span>
                    <span class="bg-slate-800 rouded-md px-3 py-1.5 text-slate-200  rounded-full">C#</span>
                </div>
            </div>
        </div>
        <div class="border-t text-center border-slate-500 p-2 mt-5">
            &copy; {{ date('Y') }} Portal de Notícias. Todos os direitos são reservados.
        </div> 
       </div>
    </footer>      
</body>
</html> 