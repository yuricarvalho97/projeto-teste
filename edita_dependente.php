<?php

#conexao com o banco de dados
include 'db.php';
#recebendo os dados

$id_dependente = $_POST['id_dependente'];
$nome_dependente = $_POST['nome_dependente'];
$idade_dependente = $_POST['idade_dependente'];

#enviando os dados para o banco
$query = "UPDATE DEPENDENTES SET nome_dependente = '$nome_dependente', idade_dependente = $idade_dependente
            WHERE id_dependente = $id_dependente";

#envinado a query
mysqli_query($conexao, $query);

#redirecionando para a página de dependentes
header('location:index.php?pagina=dependentes');
