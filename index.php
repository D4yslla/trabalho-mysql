<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <div class="w-full flex items-center justify-between p-8 bg-orange-500">
        <h1 class="text-white font-bold text-3xl">Loja Geek</h1>
        <a href="cadastrarProduto.php" class="px-4 py-2 bg-white text-orange-500 rounded font-bold"><button>Cadastrar Produto</button></a>
    </div>

    <div class="container w-full h-full flex items-center justify-between p-6 flex-col gap-4">
        <div>
            <h2 class="text-2xl">Produtos:</h2>
            <div>
                <?php include "listarProdutos.php"; ?>
            </div>
        </div>
        <div>
            <h2 class="text-2xl">Carrinho</h2>
            <?php include "listarCarrinho.php" ?>
            <br><br><br>
        </div>
    </div>
</body>
</html>