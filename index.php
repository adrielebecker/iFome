<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['nome'])){
        header('Location: home.php');
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <nav class="navbar bg-#FCE2E2">
            <div class="container-fluid">
                <img src="img/login/hamburguer.png" alt="Logo iFome" width="150" class="d-inline-block align-text-top">
                <img src="img/logo.png" alt="Logo iFome" width="150" class="d-inline-block align-text-top">
                <img src="img/login/bolo.png" alt="Logo iFome" width="150" class="d-inline-block align-text-top">
            </div>
        </nav>
        <form action="php/acao.php" method="post">
            <fieldset>
                <div class="container-sm login">
                <div class="row mt-2">
                    <div class="col-12">
                        <h1>Em minutos mate a sua fome!</h1>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <h2>Faça o seu login:</h2>
                    </div>
                </div>  
                <div class="row text-center mt-2">
                    <div class="col-12">
                        <label for="nome" class="descricao-login">Nome</label>
                        <input type="text" name="nome" id="nome" class="input-login form-control">                    
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col-12">
                        <label for="senha" class="descricao-login">Senha</label>
                        <input type="password" name="senha" id="senha" class="input-login form-control">                    
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col-12">
                        <button type="submit" name="acao" id="acao" class="submit-login" value="login">Entrar</button>
                    </div>
                </div>
                <div class="row text-end">
                    <div class="col-12">
                        <a href="cadastro.php">
                            <p name="acao" id="acao" value="cadastre" id="cadastre-se">Cadastre-se</p>
                        </a>
                    </div>
                </div>
            </div>
            </fieldset>
        </form>
        <div class="row">
            <div class="col-md-2">
                <figure>
                    <img src="img/login/sorvete.png" alt="" width="150">
                </figure>
            </div>
            <div class="col-md-8">
            <!-- div vazia -->
            </div>
            <div class="col-md-2">
                <figure>
                    <img src="img/login/cupcake.png" alt="" width="150">
                </figure>
            </div>
        </div>
    </div>
</body>
</html>