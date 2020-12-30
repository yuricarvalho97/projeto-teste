<a class="btn btn-success" href="?pagina=inserir_relacao">Adicionar nova relação</a>
<br><br>
<table class="table table table-hover table-striped" id="relacoes">
    <thead>
        <tr>
            <th>Nome do Cliente</th>
            <th>Nome do Dependente</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_relacoes)) {
            echo '<tr><td>' . $linha['nome_cliente'] . '</td>';
            echo '<td>' . $linha['nome_dependente'] . '</td>';

        ?>
            <td><a href="deleta_relacao.php?id_clientes_dependentes=<?php echo $linha['id_clientes_dependentes']; ?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>

        <?php

        } ?>
    </tbody>
</table>