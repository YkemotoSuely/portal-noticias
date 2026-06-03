@extends('layouts.site')

@section('conteudo')


 
 
        <div>
            <h2 class="text-2xl font-bold mt-10 mb-5">Últimas Notícias</h2>
            <p class="text-slate-600 mb-10">Fique por dentro das novidades, tendências e acontecimentos mais recentes em um só lugar.</p>
        </div>
        <div class="flex gap-x-3 mt-6 mb-6">
            <a href="#" class= "bg-[#4040fd] text-white px-3 py-0.5 rounded-full">Todas</a>
            <a href="#" class="bg-[#ae40fd] text-white px-3 py-0.5 rounded-full">Tecnologia</a>
            <a href="#" class="bg-[#fd9e40] text-white px-3 py-0.5 rounded-full">Educação</a>
            <a href="#" class="bg-[#1c770a] text-white px-3 py-0.5 rounded-full">Negócio</a>
        
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            @for ($i = 0; $i < 3; $i++)

                <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                    <div class="w-full h-48 overflow-hidden">
                     <img src= "https://placehold.co/600x300" class="w-full h-full object-cover" alt="Foto Capa">
                    </div>

                    <div class="p-4">
                        <span class="bg-[#ae40fd] text-white px-3 py-0.5 rounded-full">Tecnologia</span>

                        <h3 class="text-lg font-bold mt-2 mb-1">PHP continua dominando o desenvolvimento Web</h3>

                        <p class="text-sm mb-4">Descubra por que PHP continua sendo a linguagem mais utilizada para desenvolvimento de aplicações web em 2026.</p>
                    
                        <div class="text-xs border-t border-slate-100 mt-3 pt-3 text-slate-500">
                           29/05/2026
                        </div>
                    </div>
   
                </article>
            @endfor 
        </div>

        <div class="mt-8 flex justify-center gap-2">
            <a href="#" class="bg-slate-200 rouded-md px-3 py-1.5"> Anterior</a>
            <a href="#" class="bg-slate-200 rouded-md px-3 py-1.5"> 1</a>
            <a href="#" class="bg-slate-200 rouded-md px-3 py-1.5"> 2</a>
            <a href="#" class="bg-slate-200 rouded-md px-3 py-1.5"> Próximo</a>
        </div>
@endsection
