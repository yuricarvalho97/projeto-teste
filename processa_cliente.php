<?php

#Conexão com o banco de dados
include 'db.php';

#Recebendo as variáveis do formulário
$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];

#Criando a query para a inserção de dados
$query = "INSERT INTO CLIENTES(nome_cliente, cpf_cliente) VALUES('$nome_cliente','$cpf_cliente')";

#enviando a querty
mysqli_query($conexao, $query);

#redirecionando para a página de alunos
header('location:index.php?pagina=clientes');
