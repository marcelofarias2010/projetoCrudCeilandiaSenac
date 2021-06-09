<?php
session_start();
unset($_SESSION['usuarioNome']);
header('Location: entrar.php');



