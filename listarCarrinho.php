<?php
    include "conexao.php";

   
    $sql = "SELECT * FROM carrinho";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table class='border border-1 border-black px-8'>
                <tr>
                    <td class='p-6'>Id Produto</td>
                    <td class='p-6'>Nome</td>
                    <td class='p-6'>Preço</td>
                    <td class='p-6'>Quantidade</td>
                </tr>
        ";
        while ($carrinho = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-6'>" . $carrinho['id_produto'] . "</td>
                    <td class='p-6'>" . $carrinho['nome_produto'] . "</td>
                    <td class='p-6'>" . $carrinho['preco_produto'] . "</td>
                    <td class='p-6'>" . $carrinho['quantidade_produto'] . "</td>
                   <td>
            ";
        }

        echo "<button class='px-4 py-2 bg-orange-800 text-white font-bold rounded m-2'>Finalizar Compra</button>";

        echo "</table>";
    }
?>
