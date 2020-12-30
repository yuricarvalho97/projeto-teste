<?php
if (!isset($_GET['editar'])) {
?>

    <h1>Adicionar novo dependente</h1>
    <br>
    <form method="post" action="processa_dependente.php">
        <br>
        <label class="badge badge-success">Nome do dependente:</label><br>
        <input class = "form-control" type="text" name="nome_dependente" placeholder="Insira o nome do dependente">
        <br><br>
        <label class="badge badge-success">Idade:</label><br>
        <input class = "form-control" type="text" name="idade_dependente" placeholder="Insira a idade">
        <br><br>
        <input class="btn btn-success" type="submit" value="Adicionar dependente">
    </form>

<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_dependentes)) { ?>
        <?php if ($linha['id_dependente'] == $_GET['editar']) { ?>
            <h1>Editar dependente</h1>
            <br>
            <form method="post" action="edita_dependente.php">
                <input type="hidden" name="id_dependente" value="<?php echo $linha['id_dependente']; ?>">
                <br>
                <label class="badge badge-success">Nome do Dependente:</label><br>
                <input class= "form-control" type="text" name="nome_dependente" placeholder="Insira o nome do dependente" value="<?php echo $linha['nome_dependente']; ?>">
                <br><br>
                <label class="badge badge-success">Idade:</label><br>
                <input class = "form-control" type="text" name="idade_dependente" placeholder="Insira a idade" value="<?php echo $linha['idade_dependente']; ?>">
                <br><br>
                <input class = "btn btn-success" type="submit" value="Editar dependente">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>