<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Clientes-Dependentes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <a href="#"><!-- <img src="img/logo.jpg" title="logo" alt="logo"> -->
                <div id="menu">
                    <a href="?pagina=clientes">Clientes</a>
                    <a href="?pagina=dependentes">Dependentes</a>
                    <a href="?pagina=relacoes">Clientes-Dependentes</a>
                    <?php if (isset($_SESSION['login'])) { ?>
                        <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a>
                    <?php } ?>
                </div>
        </div>
    </header>
    <div id="conteudo" class="container">