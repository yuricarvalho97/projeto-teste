<?php
if (!isset($_GET['editar'])) {
?>

    <h1>Adicionar novo cliente</h1>
    <br>
    <form method="post" action="processa_cliente.php">
        <br>
        <label class="badge badge-success">Nome do cliente:</label><br>
        <input class = "form-control" type="text" name="nome_cliente" placeholder="Insira o nome do cliente">
        <br><br>
        <label class="badge badge-success">CPF:</label><br>
        <input class = "form-control" type="text" name="cpf_cliente" placeholder="Insira o CPF">
        <br><br>
        <input class="btn btn-success" type="submit" value="Adicionar cliente">
    </form>

<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_clientes)) { ?>
        <?php if ($linha['id_cliente'] == $_GET['editar']) { ?>
            <h1>Editar cliente</h1>
            <br>
            <form method="post" action="edita_cliente.php">
                <input type="hidden" name="id_cliente" value="<?php echo $linha['id_cliente']; ?>">
                <br>
                <label class="badge badge-success">Nome do Cliente:</label><br>
                <input class= "form-control" type="text" name="nome_cliente" placeholder="Insira o nome do cliente" value="<?php echo $linha['nome_cliente']; ?>">
                <br><br>
                <label class="badge badge-success">CPF:</label><br>
                <input class = "form-control" type="text" name="cpf_cliente" placeholder="Insira o CPF" value="<?php echo $linha['cpf_cliente']; ?>">
                <br><br>
                <input class = "btn btn-success" type="submit" value="Editar cliente">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>