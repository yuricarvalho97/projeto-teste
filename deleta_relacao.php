<?php
#Conexão com o banco de dados
include 'db.php';

#Recebendo o dado
$id_clientes_dependentes = $_GET['id_clientes_dependentes'];

#Criando a Query
$query = "DELETE FROM CLIENTES_DEPENDENTES WHERE ID_CLIENTES_DEPENDENTES = $id_clientes_dependentes";

#Passando a Query
mysqli_query($conexao, $query);

#Redirecionando para a página de relações
header('location:index.php?pagina=relacoes');
