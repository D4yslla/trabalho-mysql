<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <div class="container h-screen flex items-center justify-center">
        <form action="salvarProduto.php" method="post" class="flex items-center justify-center flex-col gap-8">
            <div>
                <h2 class="text-3xl font-bold">Novo Produto</h2>
            </div>
            <div>
                <input type="text" placeholder="Nome do produto" name="nome" class="w-50 px-4 py-2 border border-1 border-black">
            </div>
            <div>
                <input type="numb" placeholder="Preço" name="preco" class="w-50 px-4 py-2 border border-1 border-black">
            </div>
            <div>
                <input type="numb" placeholder="Quantidade" name="quantidade" class="w-50 px-4 py-2 border border-1 border-black">
            </div>
            <div>
                <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded font-bold">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>