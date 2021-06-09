<?php
session_start();

include './Class/ClassCrud.php';

$crud = new ClassCrud();

if((isset($_POST['login'])) && (isset($_POST['senha']))){
     $user = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_SPECIAL_CHARS);
     $pass = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);
     
     $crud->validarUser($user, $pass);
}
