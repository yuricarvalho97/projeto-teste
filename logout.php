<?php
#Iniciando a sessão
session_start();

#Destruindo a sessão
unset($_SESSION['login']);
unset($_SESSION['usuario']);

#Redirecionando para a página principal
header('location:index.php');
