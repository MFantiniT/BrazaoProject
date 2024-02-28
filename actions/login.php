<?php

    //vamos fazer a página de login do nosso sistema de assinaturas, utilizando o bootstrap para o layout e o php para a lógica de programação. 

    //iniciamos a sessão
    session_start();
    //conexão com o banco de dados
    
    include('../db/conexaodb.php');
    //verificamos se o usuário está logado
    if(isset($_SESSION['id'])){
        header("Location: ../index.php");
        exit;
    }
    //verificamos se o usuário clicou no botão de login usando stmt
    if(isset($_POST['login'])){
        //pegamos os valores dos campos do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //verificamos se os campos não estão vazios
        if(!empty($email) && !empty($senha)){
            //preparamos a query
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :e");
            $stmt->bindParam(':e', $email);
            $stmt->execute();
            //pegamos os dados do usuário
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);
            //verificamos se o usuário existe
            if($stmt->rowCount() > 0){
                //verificamos se a senha está correta
                if(password_verify($senha, $dados['senha'])){
                    //criamos a sessão do usuário
                    $_SESSION['id'] = $dados['id'];
                    $_SESSION['nome'] = $dados['nome'];
                    $_SESSION['email'] = $dados['email'];
                    //redirecionamos o usuário para a página inicial
                    //apos o login redirecionamos o usuário para a página inicial que está na pasta raiz do projeto
                    header("Location: ../index.php");
                    exit;
                }else{
                    $erro = "Email ou senha incorretos!";
                }
            }else{
                $erro = "Email ou senha incorretos!";
            }
        }else{
            $erro = "Preencha todos os campos!";
        }
    }
?>
