<?php

#Variáveis para a conexão
$servidor = "localhost:4407";
$usuario = "root";
$senha = "new_sql";
$database = "sys_clientes";

#Conexão com o banco dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

#Escrevendo as querrys de consultas necessárias
#Cliente
$query = "SELECT * FROM CLIENTES";
$consulta_clientes = mysqli_query($conexao, $query);

#Dependentes
$query = "SELECT * FROM DEPENDENTES";
$consulta_dependentes = mysqli_query($conexao, $query);

#Relação Cliente e Dependente
$query = "SELECT clientes_dependentes.id_clientes_dependentes, clientes.nome_cliente, dependentes.nome_dependente
FROM clientes, dependentes, clientes_dependentes
WHERE clientes_dependentes.id_cliente = clientes.id_cliente
and clientes_dependentes.id_dependente = dependentes.id_dependente;";
$consulta_relacoes = mysqli_query($conexao, $query);
