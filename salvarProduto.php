<?php

include "conexao.php";

$nomeProduto = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "INSERT INTO produtos (nome_produto, preco_produto, quantidade_produto) VALUES ('$nomeProduto', '$preco', '$quantidade')";

$res = $conn->query($sql);

if($res){
    header("location: index.php");
}