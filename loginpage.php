<?php
if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $dados = ["usuario" => 'Gustavo', "senha" => '123'];

        if($usuario == $dados['usuario']){
            $check1 = TRUE;
        }else{
            $check1 = FALSE;
        }
        if ($check1 == TRUE){
            if($senha == $dados['senha']){
                $check2 = TRUE;
            }else{
                $check2 = FALSE;
            }
        }
        if($check1 == FALSE){
            echo "USUÁRIO NÃO ENCONTRADO";
        }
        if($check2 == FALSE){
            echo "Senha inválida";
        }
        if ($check2 == TRUE){
            header("Location: index.html";)
        }
    }
?>

