<h1>Inserir nova relação</h1>
<br>
<form method="post" action="processa_relacao.php">
    <p class="badge badge-success">Selecione o cliente</p>
    <select class = "form-control" name="escolha_cliente">
        <option>Escolha um cliente</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_clientes)) {
            echo '<option value="' . $linha['id_cliente'] . '">' . $linha['nome_cliente'] . '</option>';
        }
        ?>
    </select>
    <br><br>
    <p class="badge badge-success">Selecione o dependente</p>
    <select class = "form-control" name="escolha_dependente">
        <option>Escolha um dependente</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_dependentes)) {
            echo '<option value="' . $linha['id_dependente'] . '">' . $linha['nome_dependente'] . '</option>';
        }
        ?>
    </select>
    <br><br>
    <input class = "btn btn-success" type="submit" value="Criar relação">
</form>