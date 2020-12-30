<?php
#Conexão com o banco de dados
include 'db.php';

#Recebendo o dado
$id_cliente = $_GET['id_cliente'];

#Criando a Query
$query = "DELETE FROM CLIENTES WHERE ID_CLIENTE = $id_cliente";

#Passsando a Query
mysqli_query($conexao, $query);

#Redirecionando para a página clientes
header('location:index.php?pagina=clientes');
