<?php


abstract class ClassBanco {
    
    //Realiza a conexão com o banco de dados
    protected function conectaDB() {
        try {
            $con = new mysqli("localhost","root","","db_cursophp");
            return $con;
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }
}
