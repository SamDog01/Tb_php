<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center mb-6">Entrar</h1>

        

            <div class="mb-4">
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300"
                       placeholder="seuemail@email.com">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Senha</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300"
                       placeholder="********">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Entrar
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            Ainda não tem conta?
            <a href="/register" class="text-blue-600 hover:underline">Criar conta</a>
        </p>
    </div>

</body>
</html>
