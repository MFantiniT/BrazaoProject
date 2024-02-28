<?php
    //vamos fazer a página de login do nosso sistema de assinaturas, utilizando o bootstrap para o layout e o php para a lógica de programação. 

    //iniciamos a sessão
    session_start();
    //conexão com o banco de dados
    include('db/conexaodb.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4" style="margin-top: 50px;">
                    <h4>Login</h4>
                    <hr>
                    <form action="actions/login.php" method="post">
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group
                        mb-3">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </div>
                        
                        <?php
                            //verificamos se existe algum erro
                            if(isset($erro)){
                                echo '<div class="alert alert-danger">'.$erro.'</div>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
