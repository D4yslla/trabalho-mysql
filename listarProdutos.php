<?php
    include "conexao.php";

   
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <td class='p-6'>Id Produto</td>
                    <td class='p-6'>Nome</td>
                    <td class='p-6'>Preço</td>
                    <td class='p-6'>Quantidade</td>
                    <td class='p-6'>Funções</td>
                </tr>
        ";
        while ($produto = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-6'>" . $produto['id_produto'] . "</td>
                    <td class='p-6'>" . $produto['nome_produto'] . "</td>
                    <td class='p-6'>" . $produto['preco_produto'] . "</td>
                    <td class='p-6'>" . $produto['quantidade_produto'] . "</td>
                   <td>
    <a class='px-4 py-2 bg-blue-600 text-white rounded font-bold' href='atualizarProduto.php?id=".$produto['id_produto']."'>
        Atualizar
    </a>
</td>
<td>
    <a class='px-4 py-2 bg-red-600 text-white rounded font-bold' href='deletarProduto.php?id=".$produto['id_produto']."'>
        Deletar
    </a>
</td>
<td>
    <a class='px-4 py-2 bg-red-600 text-white rounded font-bold' href='carrinho.php?id=".$produto['id_produto']."'>
        Add ao Carrinho
    </a>
</td>
</tr>
            ";
        }

        echo "</table>";
    }
?>
