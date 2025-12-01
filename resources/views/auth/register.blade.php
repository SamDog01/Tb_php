<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center mb-6">Criar conta</h1>

        <form>
            <div class="mb-4">
                <label class="block mb-1 font-medium">Nome</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Seu nome">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="seuemail@email.com">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Senha</label>
                <input type="password" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="********">
            </div>

            <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                Criar conta
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            Já tem conta?
            <a href="/login" class="text-blue-600 hover:underline">Entrar</a>
        </p>
    </div>

</body>
</html>
