<!DOCTYPE html>
<?php
    require_once('funcoes/funcoes.php');
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surpreenda-me</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="img/surpreenda/fundoSurpre.png" alt="" class="fundoSurpre">
            </div>
            <div class="col-md-6 text-center">
                <div class="row">
                    <?php
                        $sorteio = sorteio($result);
                        echo "<h3 class='sort-text mt-5'>Você deveria experimentar: </h3>";
                        echo "<h1 style='color: black' class='sort'>".$sorteio."</h1>";
                    ?>
                </div>
                <div class="row">
                    <img src="img/surpreenda/meninoFeliz.png" alt="" class="menino offset-3">
                </div>
                <div class="row">
                    <div class="col">
                        <a href="home.php">
                            <button class="btn btn-primary">Voltar</button>
                        </a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-danger" onclick="atualizar()">Sortear novamente</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>