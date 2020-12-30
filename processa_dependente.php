<?php

#Conexão com o banco de dados
include 'db.php';

#Recebendo as variáveis do formulário
$nome_dependente = $_POST['nome_dependente'];
$idade_dependente = $_POST['idade_dependente'];

#Criando a query para a inserção de dados
$query = "INSERT INTO DEPENDENTES(nome_dependente, idade_dependente) VALUES('$nome_dependente', $idade_dependente)";

#enviando a query
mysqli_query($conexao, $query);

#redirecionando para a página de dependentes
header('location:index.php?pagina=dependentes');

