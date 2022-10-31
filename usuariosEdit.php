<?php
$titulo = "Editar Usuário";
include "./cabecalho.php";
include "./conexao.php";

if(isset($_GET["id"]) && !empty($_GET["id"])){

    $query = "select id,nome,login,ativo from usuarios where id=".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    $dados = mysqli_fetch_array($resultado);

    //echo "<pre>";
    //print_r($dados);
    //echo "</pre>";
    $id= $dados["id"];
    $nome= $dados["nome"];
    $login= $dados["login"];
    $ativo= $dados["ativo"];

}

?>

<div  class="row">
    <div class= "offset-4 col-md-4">
        <h2> Editar Usuário</h2>
        <form action = "usuariosEdit.php" method="post">
        <div class="form-group">
        <label>Id</label>
        <input type="text"
        name="id"
        readonly
        value="<?php echo $id; ?>" 
        class="form-control"/>
</div>
        <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control"/>
</div>

<div class="form-group">
        <label>Login</label>
        <input type="text" name="login" class="form-control"/>
</div>

<div class="form-group">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control"/>
</div>

<div class="form-group">

    Ativo: <input type="checkbox" name="ativo" class="form-check"/>
</div>

<div class="form-group">
    <button type="submit"
    class="btn btn-success">
    Salvar usuário
</button>
    </form>
</div>

<?php include "rodape.php"; ?>