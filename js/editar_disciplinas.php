<?php include "cabecalho.php"; ?>

<?php
$dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/ById/".$_GET["id"]);
$dados = json_decode($dados,true);
   echo "<pre>";
   print_r($dados);
   echo"</pre>";
?>
<div class="row">
    <div class="col-4 offset-4">

   </div>

   </div>
   <?php include "rodape.php"; ?>

