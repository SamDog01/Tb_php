<aside class="w-64 bg-gray-900 text-white flex flex-col p-5">
    <h1 class="text-2xl font-bold mb-6">Samurá</h1>

    <nav class="flex flex-col gap-4">
        <a href="/dashboard" class="hover:bg-gray-700 p-2 rounded">Dashboard</a>
        <a href="/ganhos" class="hover:bg-gray-700 p-2 rounded">Ganhos</a>
        <a href="/gastos" class="hover:bg-gray-700 p-2 rounded">Gastos</a>
    
    </nav>

    <div class="mt-auto pt-6">
        <form action="/logout" method="POST">
            @csrf
            <button class="w-full bg-red-600 hover:bg-red-700 p-2 rounded">Sair</button>
        </form>
    </div>
</aside>
