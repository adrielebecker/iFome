<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
       <div class="row text-center mb-5">
            <div class="col-12">
               <h1>Bem vindo ao seu perfil, <?= $_SESSION['nome'];?></h1>
            </div>
       </div>
       <hr>
       <div class="row mt-2">
            <div class="col-md-3">
                <h3 class="h3-perfil">Nome Completo</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">Sexo</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">CPF</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">RG</h3>
            </div>
       </div>

       <div class="row">
            <div class="col-md-3">
                <h4 class="h4-perfil">admin</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">Feminino</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">123.123.123-12</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">12.120.120-12</h4>
            </div>
       </div>
       <hr>       
       <div class="row mt-2">
            <div class="col-md-3">
                <h3 class="h3-perfil">Telefone</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">Celular</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">E-mail</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">Data de Nascimento</h3>
            </div>
       </div>

       <div class="row">
            <div class="col-md-3">
                <h4 class="h4-perfil">3547-0041</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">(47) 9 9293-1824</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">admin@gmail.com</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">12.10.1990</h4>
            </div>
       </div>
       <hr>
       <div class="row mt-2">
            <div class="col-md-3">
                <h3 class="h3-perfil">Endereço</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">Número</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">CEP</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">Bairro</h3>
            </div>
       </div>

       <div class="row">
            <div class="col-md-3">
                <h4 class="h4-perfil">Rua Abraham Lincoln</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">210</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">89160-206</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">Jardim América</h4>
            </div>
       </div>
        <hr>
       <div class="row mt-2">
            <div class="col-md-3">
                <h3 class="h3-perfil">Estado</h3>
            </div>
            <div class="col-md-3">
                <h3 class="h3-perfil">Cidade</h3>
            </div>
            <div class="col-md-6">
                <h3 class="h3-perfil">Complemento</h3>
            </div>
       </div>

       <div class="row">
            <div class="col-md-3">
                <h4 class="h4-perfil">Santa Catarina</h4>
            </div>
            <div class="col-md-3">
                <h4 class="h4-perfil">Rio do Sul</h4>
            </div>
            <div class="col-md-6">
                <h4 class="h4-perfil">Casa</h4>
            </div>
       </div>
       <hr>
       <div class="row">
            <div class="col-12">
                <a href="home.php">
                    <button class="btn btn">< Voltar</button>
                </a>
            </div>
       </div>
    </div>
</body>
</html>