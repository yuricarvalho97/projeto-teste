<?php
#Conexão com o banco de dados
include 'db.php';

#Recebendo o dado
$id_dependente = $_GET['id_dependente'];

#Criando a Query
$query = "DELETE FROM DEPENDENTES WHERE ID_DEPENDENTE = $id_dependente";

#Passando a Query
mysqli_query($conexao, $query);

#Redirecionando para a página de Dependentes
header('location:index.php?pagina=dependentes');
