<a class="btn btn-success" href="?pagina=inserir_dependente">Adicionar novo dependente</a>
<br><br>
<table class="table table-hover table-striped" id="dependentes">
    <thead>
        <tr>
            <th>Nome do Dependente</th>
            <th>Idade</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_dependentes)) {
            echo '<tr><td>' . $linha['nome_dependente'] . '</td>';
            echo '<td>' . $linha['idade_dependente'] . '</td>';
        ?>
            <td><a href="?pagina=inserir_dependente&editar=<?php echo $linha['id_dependente']; ?>"><i class="fas fa-user-edit"></i></a></td>
            <td><a href="deleta_dependente.php?id_dependente=<?php echo $linha['id_dependente']; ?>"><i class="fas fa-user-times"></i></a></td>
            </tr>

        <?php

        } ?>
    </tbody>
</table>