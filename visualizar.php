<?php
include './Includes/header.php';
include './Class/ClassCrud.php';

$Crud = new ClassCrud();
?>

<div class="container">
<?php
$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $Crud->selectDB("*", "alunos", "where cod=?", "i", array($IdUser));
$Result = $BFetch->fetch_all();
foreach ($Result as $Fetch) {
    ?>
        <h1>Dados do Aluno</h1>
        <hr>
        <strong>Nome:</strong> <?php echo $Fetch[1]; ?><br>
        <strong>Idade:</strong> <?php echo $Fetch[2]; ?><br>
        <strong>Telefone:</strong> <?php echo $Fetch[3]; ?><br>
        <strong>Cidade:</strong> <?php echo $Fetch[4]; ?><br>
<?php } ?>
        
</div>

<?php
include './Includes/footer.php';
?>
