<?php

require 'ClassBanco.php';

class ClassCrud extends ClassBanco {
    #Atributos

    private $Crud;
    private $Contador;
    private $Resultado;

    #Contador de parâmetros

    private function countParametros($Parametros) {
        $this->Contador = count($Parametros);
    }

    #Preparação das declarativas

    private function preparedStatements($Query, $Tipos, $Parametros) {
        # Obtendo o número de parametros
        $this->countParametros($Parametros);
        # obtendo a conexão com o servidor
        $Con = $this->conectaDB();
        # preparando a query
        $this->Crud = $Con->prepare($Query);
        # obtendo o resultado da query (SQL)
        if ($this->Contador > 0) {
            $CallParametros = array();
            foreach ($Parametros as $Key => $Parametro) {
                $CallParametros[$Key] = &$Parametros[$Key];
            }
            //A função array_unshift () insere novos elementos em um array
            array_unshift($CallParametros, $Tipos);
            //call_user_func_array — Chama uma dada função de usuário com um array de parâmetros
            call_user_func_array(array($this->Crud, 'bind_param'), $CallParametros);
        }
        $this->Crud->execute();
        $this->Resultado = $this->Crud->get_result();
    }
    
    #Método de Seleção
    public function selectDB($Campos, $Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Tipos, $Parametros);
        return $this->Resultado;
    }
    
    #Método de Inserção
    public function insertDB($Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Tipos, $Parametros);
        return $this->Crud;
    }
    
    #Método para apagar dados no DB
    public function deleteDB($Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    }
    
    #Método para atualizar DB
    public function updateDB($Tabela, $Set, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    }

    #Método para Atenticar usuário
    public function validarUser($user, $pass) {
        $usuario = $this->conectaDB()->real_escape_string($user);
        $senha = $this->conectaDB()->real_escape_string($pass);
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha='$senha' LIMIT 1";
        
        $result = $this->conectaDB()->query($sql);
        $resultado = $result->fetch_assoc();

        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: entrar.php");
        } elseif (isset($resultado)) {
            $_SESSION['usuarioNome'] = $resultado['nome'];
            header("Location: index.php");
        }
    }
}
