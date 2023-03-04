<header>
    <nav class="flex items-center justify-between flex-wrap dark:bg-gray-900 p-6">
        <h1 class="font-semibold text-xl tracking-tight text-white mr-10">Crud con laravel</h1>
        <ul class="flex">
            <li class="mr-6"><a class=" {{request()->routeIs('home') ? 'bg-blue-500 border-blue-500 rounded py-1 px-3' : '' }} block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="{{route('home')}}">Inicio</a></li>
            <li class="mr-6"><a class=" {{request()->routeIs('portafolio.portafolio') ? 'bg-blue-500 border-blue-500 rounded py-1 px-3' : '' }} block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="{{route('portafolio.portafolio')}}">Mi portafolio</a></li>
            <li class="mr-6"><a class=" {{request()->routeIs('cursos.index') ? 'bg-blue-500 border-blue-500 rounded py-1 px-3' : '' }} block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="{{route('cursos.index')}}">Cursos</a></li>
            <li class="mr-6"><a class=" {{request()->routeIs('sobre-mi') ? 'bg-blue-500 border-blue-500 rounded py-1 px-3' : '' }} block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="{{route('sobre-mi')}}">Sobre mi</a></li>
            <li class="mr-6"><a class=" {{request()->routeIs('contactanos.index') ? 'bg-blue-500 border-blue-500 rounded py-1 px-3' : '' }} block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="{{route('contactanos.index')}}">Contáctame</a></li>
        </ul>
    </nav>
</header>