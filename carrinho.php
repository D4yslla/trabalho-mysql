<?php
    include "conexao.php";

if (isset($_GET['id'])) {
    $id_produto = intval($_GET['id']);

    $sqlProduto = "SELECT * FROM produtos WHERE id_produto = ?";
    $stmt = $conn->prepare($sqlProduto);
    $stmt->bind_param("i", $id_produto);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
        $produto = $resultado->fetch_assoc();

    
        $sqlCarrinho = "INSERT INTO carrinho (id_produto, nome_produto, preco_produto, quantidade_produto) VALUES (?, ?, ?, ?)";
        $stmtCarrinho = $conn->prepare($sqlCarrinho);

        $stmtCarrinho->bind_param("isdi", $produto['id_produto'], $produto['nome_produto'], $produto['preco_produto'], $produto['quantidade_produto']);

        if ($stmtCarrinho->execute()) {
            header("location: index.php");
        }
    } 

    $stmt->close();
    $stmtCarrinho->close();
}
?>
