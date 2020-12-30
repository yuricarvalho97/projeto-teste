<?php
#Conexão com o banco de dados
include 'db.php';

#Recendo os dados da página principal
$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

#Escrevendo o script de procura no banco de dados
$query = "SELECT * FROM usuarios WHERE nome_usuario = '$usuario' and senha_usuario = '$senha'";

#Fazendo a consulta no banco de dados
$consulta = mysqli_query($conexao, $query);

#Procurando registro no banco
if (mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:index.php');
} else {
    header('location:index.php?erro');
}
