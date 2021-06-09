<?php
session_start();

if(!isset($_SESSION['usuarioNome'])){
    header("Location: entrar.php");
}
include './Includes/header.php';
include './Class/ClassCrud.php';
?>
<div class="container">
    <h1>Seleção dos dados do Aluno</h1>
    <table class="table table-striped">
        <thead>      
            <th>Nome</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>Cidade</th>
        </thead>
        <tbody>
            <!-- Estrutura de loop -->
            <?php
            $Crud = new ClassCrud();
            $BFetch = $Crud->selectDB("*", "alunos", "", "", array());
            while ($Result = $BFetch->fetch_all()) {
                foreach ($Result as $Fetch) {
                    ?>
                    <tr>               
                        <td><?php echo $Fetch[1]; ?></td>
                        <td><?php echo $Fetch[2]; ?></td>
                        <td><?php echo $Fetch[3]; ?></td>
                        <td><?php echo $Fetch[4]; ?></td>
                        <td>
                            <a href="<?php echo "visualizar.php?id={$Fetch[0]}"; ?>">
                                <img src="img/Visualizar.png" alt="Visualizar">
                            </a>
                            <a href="<?php echo "cadastrar.php?id={$Fetch[0]}"; ?>">
                                <img src="img/Edite.png" alt="Editar">
                            </a>
                            <a class="Deletar" href="<?php echo "Controller/ControllerDeletar.php?id={$Fetch[0]}"; ?>">
                                <img src="img/Lixeira.png" alt="Deletar">
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>


<?php
include './Includes/footer.php';
?>

