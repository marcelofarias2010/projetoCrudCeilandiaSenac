<?php
session_start();

if (!isset($_SESSION['usuarioNome'])) {
    header("Location: entrar.php");
}
include './Includes/header.php';
include './Class/ClassCrud.php';

if (isset($_GET['id'])) {
    $Acao = "Editar";
    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "alunos", "where cod=?", "i", array($_GET['id']));
    $Fetch = $BFetch->fetch_all(); //Busque todas as linhas e retorne o conjunto de resultados como uma matriz associativa:
    foreach ($Fetch as $Fetchs) {
        $cod = $Fetchs[0];
        $Nome = $Fetchs[1];
        $idade = $Fetchs[2];
        $fone = $Fetchs[3];
        $Cidade = $Fetchs[4];
    }
} else {
    $Acao = "Cadastrar";
    $cod = 0;
    $Nome = "";
    $idade = "";
    $fone = "";
    $Cidade = "";
}
?>
<div class="container">
    <h1 class="text-center">Formulário de cadastro  </h1>
    <div class="Resultado"></div>
    <form action="Controller/ControllerCadastro.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="cod" name="cod" value="<?php echo $cod; ?>">
        <div class="form-group">
            <label class="control-label col-sm-1" for="nome">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" value="<?php echo $Nome ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="col-sm-1" for="idade">Idade:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="idade" value="<?php echo $idade ?>">
                </div>
                <label class="col-sm-1" for="fone">Telefone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="fone" value="<?php echo $fone ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-1" for="Cidade">cidade:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="Cidade" value="<?php echo $Cidade ?>">
                </div>                    
                <div class="col-sm-6">
                    <input type="file"  name="fileToUpload">
                </div> 
            </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-1">
                <button type="submit" name="submit" class="btn btn-success btn-lg"><?php echo $Acao ?></button>
            </div>
        </div>
    </form>
</div>
<?php
include './Includes/footer.php';
?>

