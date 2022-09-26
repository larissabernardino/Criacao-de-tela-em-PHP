<?php include "cabecalho.php"; ?>

<?php
    $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas.ById");
    $dados = json_decode($dados,true);
    // echo "<pre>";
    // print_r($dados);
    // echo"</pre>";
?>

<div class="row">
    <div class="col-10 offset-1">
    
        <table class = "table table-hover table-striped">
            <thead>
                <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Sigla</th>
            <th></th>


</tr>
            </thead>

            <tbody>
            <?php
                for($i = 0; $i < count($dados); $i++)
                {
            ?>
                <tr>
                <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                <td><?php echo $dados[$i]["nome"]; ?></td>
                <td><?php echo $dados[$i]["apelido"]; ?></td>
                <td><?php echo $dados[$i]["sigla"]; ?></td>
                <td>
                    <a href="./editar_disciplinas.php?id=<?php echo $dados[$i]["disciplinasId"];?>" class="btn btn-warning">
                    Editar
                </a>
                </td>
</tr>
<?php
 }
?>
            </tbody>
    </table>

</div>
</div>

<?php include "rodape.php"; ?>