<header class="bg-white shadow p-4 flex justify-between items-center">
    
    <h2 class="text-xl font-semibold">@yield('title')</h2>

    <div class="flex items-center gap-4">
        <span class="text-gray-700">Olá, {{ auth()->user()->name ?? 'Usuário' }}</span>

        <img 
            src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'User' }}" 
            class="w-10 h-10 rounded-full border"
        >
    </div>

</header>
