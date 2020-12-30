<?php

#Conexão com o banco de dados
include 'db.php';

#Recebendo as variáveis do formulário
$id_cliente = $_POST['escolha_cliente'];
$id_dependente = $_POST['escolha_dependente'];

#Criando a query para a inserção de dados
$query = "INSERT INTO CLIENTES_DEPENDENTES(id_cliente, id_dependente) VALUES($id_cliente, $id_dependente)";

#Enviando a query
mysqli_query($conexao, $query);

#Redirecionando para a página de relações
header('location:index.php?pagina=relacoes');
