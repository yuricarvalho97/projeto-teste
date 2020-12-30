<?php
#Iniciando sessão
session_start();

#Conexão com o banco
include 'db.php';

#Cabeçalho da página
include 'header.php';

#Validação do Login
if (isset($_SESSION['login'])) {
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'clientes';
    }
} else {
    $pagina = 'home';
}

#Modularização das páginas
switch ($pagina) {
    case 'dependentes':
        include 'views/dependentes.php';
        break;
    case 'clientes':
        include 'views/clientes.php';
        break;
    case 'relacoes':
        include 'views/relacoes.php';
        break;
    case 'inserir_cliente':
        include 'views/inserir_cliente.php';
        break;
    case 'inserir_relacao':
        include 'views/inserir_relacao.php';
        break;
    case 'inserir_dependente':
        include 'views/inserir_dependente.php';
        break;
    default:
        include 'views/home.php';
}
#Rodapé da Página
include 'footer.php';
