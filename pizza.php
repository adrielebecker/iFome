<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
<!-- navbar -->
<div class="container">
    <nav class="navbar bg-#FCE2E2">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
            <img src="img/logo.png" alt="Logo iFome" width="150" class="d-inline-block align-text-top">
            </a>
            <h3 class="text-nav mt-3">Pizza</h3>
            <form action="" method="post">
            <input type="text" name="procurar" id="procurar" placeholder="Pesquisar por um item">        
            </form>
            <div class="col-md-2">
                <a href="usuario.php" class="link">
                    <img src="img/perfil.png" alt="">  
                </a>
                <a href="compras.php" class="link">
                    <img src="img/carrinho-de-compras.png" alt="">
                </a>
                <a href="acao.php?acao=logoff" class="link"><button class="btn btn-danger">Sair</button></a>
            </div>   
        </div>
    </nav>

<!-- banner pizza -->
    <div class="row">
        <div class="col-12">
            <figure>
                <img src="img/pizza/banner-pizza.png" alt="banner salgados" class="banner">
            </figure>
        </div>
    </div>

<!-- imagens 1 linha -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome70">Pizza Gigante</p>
                <figure>
                    <input type="hidden" name="id70" id="id70" value="70">
                    <img src="img/pizza/pizza.png" alt="pizza gigante" class="img-pizza" width="70%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome71">Pizza Grande</p>
                <figure>
                    <input type="hidden" name="id71" id="id71" value="71">
                    <img src="img/pizza/pizza.png" alt="pizza grande" class="img-pizza" width="70%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome72">Pizza Média</p>
                <figure>
                    <input type="hidden" name="id72" id="id72" value="72">
                    <img src="img/pizza/pizza.png" alt="pizza média" class="img-pizza" width="70%">
                </figure>
            </div>
        </div>
    </div>

<!-- preço das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 116,00</div>
            <input type="hidden" id="preco70" value="116.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 86,00</div>
            <input type="hidden" id="preco71" value="86.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 62,00</div>
            <input type="hidden" id="preco72" value="62.00">
        </div>
    </div>

<!-- descrição das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc70">Xadrez</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc71">16 fatias</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc72">12 fatias</p>
        </div>
    </div>

<!-- add ao carrinho 1 -->
<div class="row">
    <div class="col-md-4">
        <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(70,74,70)">
    </div>
    <div class="col-md-4">
        <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(71,74,70)">
    </div>
    <div class="col-md-4">
        <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(72,74,70)">
    </div>
</div>

<!-- imagens 2 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome73">Pizza Pequena</p>
                <figure>
                    <input type="hidden" name="id73" id="id73" value="73">
                    <img src="img/pizza/pizza.png" alt="pizza pequena" class="img-pizza" width="70%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome74">Pizza Brotinho</p>
                <figure>
                    <input type="hidden" name="id74" id="id74" value="74">
                    <img src="img/pizza/pizza.png" alt="pizza brotinho" class="img-pizza" width="70%">
                </figure>
            </div>
        </div>
    </div>

<!-- preço 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 49,00</div>
            <input type="hidden" id="preco73" value="49.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 33,00</div>
            <input type="hidden" id="preco74" value="33.00">
        </div>
    </div>

<!-- descrição 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc73">8 fatias</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc74">4 fatias</p>
        </div>
    </div>

<!-- add ao carrinho 2-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(73,74,70)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(74,74,70)">
        </div>
    </div>

<!-- finalização -->
    <div class="row mt-5">
        <div class="col-12">
          <figure>
            <img src="img/home/ondas.png" alt="detalhe de finalização" class="finalizacao">
          </figure>
        </div>
      </div>

    <a href="avaliar.php">
        <button class="avaliar btn btn">Avaliar o <b class="logo">iFome</b></button>
    </a>

</div>
<script src="js/jquery/jquery-3.6.1.min.js"></script>
</body>
</html>