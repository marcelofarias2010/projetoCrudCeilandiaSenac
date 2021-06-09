<?php

require '../Includes/Variaveis.php';
require '../Class/ClassCrud.php';

$Crud = new ClassCrud();

if ($Acao == 'Cadastrar') {
    $Crud->insertDB("alunos", "?,?,?,?,?", "isiss", array($cod,$Nome,$idade,$fone,$Cidade));
    echo "Cadastro Realizado com Sucesso!";
} else {
    $Crud->updateDB("alunos", "nome=?,idade=?,fone=?,cidade=?","cod=?", "sissi", array(
        $Nome,$idade,$fone,$Cidade,$cod));
    
    echo "Cadastro Editado com Sucesso!";
}
