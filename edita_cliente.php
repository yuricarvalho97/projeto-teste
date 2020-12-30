<?php

#conexao com o banco de dados
include 'db.php';

#recebendo os dados
$id_cliente = $_POST['id_cliente'];
$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];

#enviando os dados para o banco
$query = "UPDATE CLIENTES SET nome_cliente = '$nome_cliente', cpf_cliente = '$cpf_cliente'
            WHERE id_cliente = $id_cliente";

#enviando a query
mysqli_query($conexao, $query);

#redirecionando para a página de clientes
header('location:index.php?pagina=clientes');
