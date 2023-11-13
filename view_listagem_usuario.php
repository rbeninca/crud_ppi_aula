<?php 
    include_once ("PessoaController.php");
    include_once ("Pessoa.php");
?>
<table id="lista_usuarios">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
          $controllerPessoa=new PessoaController();
          $listaPessoas=$controllerPessoa->listarPessoas();
            foreach ($listaPessoas as $pessoa){
                echo "<tr>";
                echo "<td>".$pessoa['nome']."</td>";
                echo "<td>".$pessoa['email']."</td>";
                echo "<td>".$pessoa['senha']."</td>";
                echo "<td><a href='rota.php?op=editar_usuario&id=".$pessoa['id']."'>Editar</a></td>";
                echo "<td><a href='rota.php?op=excluir_usuario&id=".$pessoa['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>