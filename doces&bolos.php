<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doces & Bolos</title>
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
            <h3 class="text-nav mt-3">Doces & Bolos</h3>
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

<!-- banner doces&bolos -->
    <div class="row mt-5">
        <div class="col-12">
            <figure>
                <img src="img/doces/banner-doces.png" alt="banner salgados" class="banner">
            </figure>
        </div>
    </div>

<!-- imagens 1 linha -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome25">Sonho</p>
                <figure>
                    <input type="hidden" name="id25" id="id25" value="25">
                    <img src="img/doces/sonho.png" alt="sonho de chocolate" class="img" id="img-sonho" width="75%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome26">Croissant</p>
                <figure>
                    <input type="hidden" name="id26" id="id26" value="26">
                    <img src="img/doces/croissant-doce.png" alt="croissant de chocolate" class="img" width="70%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome27">Donuts</p>
                <figure>
                    <input type="hidden" name="id27" id="id27" value="27">
                    <img src="img/doces/donuts.png" alt="donuts" class="img" width="60%" id="img-donuts">
                </figure>
            </div>
        </div>
    </div>

<!-- preço das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 3,75</div>
            <input type="hidden" id="preco25" value="3.75">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 7,50</div>
            <input type="hidden" id="preco26" value="7.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 2,50</div>
            <input type="hidden" id="preco27" value="2.50">
        </div>
    </div>

<!-- descrição das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc25">Chocolate</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc26">Chocolate</p>
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc27" value="Sem descrição">
        </div>
    </div>

<!-- add ao carrinho 1-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(25,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(26,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(27,39,25)">
        </div>
    </div>

<!-- imagens 2 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome28">Cupcake</p>
                <figure>
                    <input type="hidden" name="id28" id="id28" value="28">
                    <img src="img/doces/cupcake.png" alt="Cupcake" class="img" width="55%" id="img-cupcake">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome29">Brownie</p>
                <figure>
                    <input type="hidden" name="id29" id="id29" value="29">
                    <img src="img/doces/brownies.png" alt="Brownie" class="img" id="img-brownie" width="90%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome30">Fatia de Torta Alemã</p>
                <figure>
                    <input type="hidden" name="id30" id="id30" value="30">
                    <img src="img/doces/torta-alema.png" alt="Torta alemã" class="img" width="60%" id="img-torta">
                </figure>
            </div>
        </div>
    </div>

<!-- preço 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 4,60</div>
            <input type="hidden" id="preco28" value="4.60">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 3,25</div>
            <input type="hidden" id="preco29" value="3.25">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 5,90</div>
            <input type="hidden" id="preco30" value="5.90">
        </div>
    </div>

<!-- descrição 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc28" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc29" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc30" value="Sem descrição">
        </div>
    </div>

<!-- add ao carrinho 2-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(28,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(29,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(30,39,25)">
        </div>
    </div>

<!-- imagens 3 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome31">Fatia de Bolo</p>
                <figure>
                    <input type="hidden" name="id31" id="id31" value="31">
                    <img src="img/doces/bolo.png" alt="Bolo de chocolate" class="img" width="55%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome32">Crepe</p>
                <figure>
                    <input type="hidden" name="id32" id="id32" value="32">
                    <img src="img/doces/crepe.png" alt="crepe de chocolate e morangos" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome33">Açaí</p>
                <figure>
                    <input type="hidden" name="id33" id="id33" value="33">
                    <img src="img/doces/acai.png" alt="açaí" class="img" width="70%">
                </figure>
            </div>
        </div>  
    </div>

<!-- preço 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 12,50</div>
            <input type="hidden" id="preco31" value="12.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 22,99</div>
            <input type="hidden" id="preco32" value="22.99">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 5,99</div>
            <input type="hidden" id="preco33" value="5.99">
        </div>
    </div>

<!-- descricação 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc31">Chocolate</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc32">Chocolate e Morangos</p>
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc33" value="Sem descrição">
        </div>
    </div>

<!-- add ao carrinho 3-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(31,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(32,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(33,39,25)">
        </div>
    </div>

<!-- imagens 4 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome34">Tortinha</p>
            <figure>
                <input type="hidden" name="id34" id="id34" value="34">
                <img src="img/doces/tortinha.png" alt="tortinha de limão" class="img" width="55%" id="img-tortinha">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome35">Bolinho de Chuva</p>
            <figure>
                <input type="hidden" name="id35" id="id35" value="35">
                <img src="img/doces/bol-chuva.png" alt="bolinho de chuva" class="img" width="50%" id="img-bolchuva">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome36">Fatia de Rocambole</p>
            <figure>
                <input type="hidden" name="id36" id="id36" value="36">
                <img src="img/doces/rocambole.png" alt="rocambole de chocolate e morangos" class="img" width="70%">
            </figure>
        </div>
    </div> 
</div>

<!-- preço 4 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 7,75</div>
        <input type="hidden" id="preco34" value="7.75">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 1,20</div>
        <input type="hidden" id="preco35" value="1.20">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 4,90</div>
        <input type="hidden" id="preco36" value="4.90">
    </div>
</div>

<!-- descricação 4 linha -->
<div class="row">
    <div class="col-md-4">
        <p class="descricao-card" id="desc34">Limão</p>
    </div>
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc35" value="Sem descrição">
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc36">Chocolate e Morangos</p>
    </div>
</div>

<!-- add ao carrinho 4-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(34,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(35,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(36,39,25)">
        </div>
    </div>

<!-- imagens 5 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome37">Alfajor</p>
            <figure>
                <input type="hidden" name="id37" id="id37" value="37">
                <img src="img/doces/alfajor.png" alt="alfajor" class="img" width="70%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome38">Muffin</p>
            <figure>
                <input type="hidden" name="id38" id="id38" value="38">
                <img src="img/doces/muffin.png" alt="Muffin" class="img" id="img-muffin" width="90%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome39">Brigadeiro</p>
            <figure>
                <input type="hidden" name="id39" id="id39" value="39">
                <img src="img/doces/brigadeiro.png" alt="Brigadeiro" class="img" width="70%">
            </figure>
        </div>
    </div>
</div>

<!-- preço 5 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 4,99</div>
        <input type="hidden" id="preco37" value="4.99">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 4,35</div>
        <input type="hidden" id="preco38" value="4.35">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 3,10</div>
        <input type="hidden" id="preco39" value="3.10">
    </div>
</div>

<!-- descricação 5 linha -->
<div class="row">
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc37" value="Sem descrição">
    </div>
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc38" value="Sem descrição">
    </div>
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc39" value="Sem descrição">
    </div>
</div>

<!-- add ao carrinho 5-->
    <div class="row">
        <div class="col-md-4">
           <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(37,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(38,39,25)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(39,39,25)">
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