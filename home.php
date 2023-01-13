<!DOCTYPE html>
<?php
    session_start();
    echo "Bem vindo ".$_SESSION['nome'];
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
<!-- navbar -->
<?php
    include('menu.php');
?>
<!-- opções de navegação -->
    <div class="row ms-5">
        <div class="col-md-2 me-4">
            <a href="salgados.php" class="link">
            <figure>
                <img src="img/home/salgadosHome.png" alt="Salgados" class="img-opcoes">
                <figcaption class="legend">Salgados</figcaption>
            </figure>
            </a>
        </div>
        <div class="col-md-2 me-4">
            <a href="doces&bolos.php" class="link">
            <figure>
                <img src="img/home/doce.png" alt="Doces e Bolos" class="img-opcoes">
                <figcaption class="legend">Doces & Bolos</figcaption>
            </figure>
            </a>
        </div>
        <div class="col-md-2 me-4">
            <a href="lanches.php" class="link">
            <figure>
                <img src="img/home/lanchesHome.png" alt="Lanches" class="img-opcoes">
                <figcaption class="legend">Lanches</figcaption>
            </figure>
            </a>
        </div>
        <div class="col-md-2 me-4">
            <a href="bebidas.php" class="link">
            <figure>
                <img src="img/home/bebidas.png" alt="Bebidas" class="img-opcoes">
                <figcaption class="legend">Bebidas</figcaption>
            </figure>
            </a>
        </div>
        <div class="col-md-2">
            <a href="pizza.php" class="link">
            <figure>
                <img src="img/home/pizzaHome.png" alt="Salgados" class="img-opcoes">
                <figcaption class="legend">Pizza</figcaption>
            </figure>
            </a>
        </div>
    </div>

<!-- sugestão de porções -->
    <div class="sugest">
        <div class="row">
            <div class="col-12 mt-2">
                <p class="titulo-sugest">Sugestões de porções do <b>iFome</b> para você</p>
            </div>

        <div class="row">
            <div class="col-md-4">
                <figure>
                    <img src="img/home/fritasSugest.png" alt="porção de fritas" class="img-sugest">
                </figure>
            </div>
            <div class="col-md-4">
                <figure>
                    <img src="img/home/frangoSugest.png" alt="porção de frango" class="img-sugest">
                </figure>
            </div>
            <div class="col-md-4">
                <figure>
                    <img src="img/home/sushiSugest.png" alt="porção de sushi" class="img-sugest">
                </figure>
            </div>
        </div>
        </div>
    </div>

<!-- legenda da sugestão -->
    <div class="row">
        <div class="col-md-4">
            <p class="text-sugest">Porção de Fritas com Filé</p>
        </div>
        <div class="col-md-4">
            <p class="text-sugest">Porção de Frango Grelhado</p>
        </div>
        <div class="col-md-4">
            <p class="text-sugest">Porção de Sushi</p>
        </div>
    </div>

<!-- imagens 1 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id1" id="id1" value="1">
                <p class="titulo-card" id="nome1">Fatia de Bolo</p>
                <img src="img/home/bolo.png" alt="bolo de leite ninho e nutella" class="img" id="img-bolo" width="70%">
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id2" id="id2" value="2"> 
                <p class="titulo-card" id="nome2">Coxinha</p>
                <img src="img/home/coxinha.png" alt="coxinha de frango com catupiry" class="img" width="60%">
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id3" id="id3" value="3">
                <p class="titulo-card" id="nome3">Coca-cola</p>
                <img src="img/home/coca.png" alt="coca cola 500ml" class="img" width="50%" id="img-coca">
            </div>
        </div>
    </div>

<!-- preço das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 19,90</div>
            <input type="hidden" id="preco1" value="19.90">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 6,50</div>
            <input type="hidden" id="preco2" value="6.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 6,00</div>
            <input type="hidden" id="preco3" value="6.00">
        </div>
    </div>

<!-- descrição das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc1">Leite Ninho com Nutella</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc2">Frango com Catupiry</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc3">350ml</p>
        </div>
    </div>

    <!-- add ao carrinho -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(1,9,1)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(2,9,1)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(3,9,1)">
        </div>
    </div>

<!-- imagens 2 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id4" id="id4" value="4">
                <p class="titulo-card" id="nome4">Tartare Massago</p>
                <img src="img/home/tartare.png" alt="bolo de leite ninho e nutella" class="img" width="70%">
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id5" id="id5" value="5">
                <p class="titulo-card" id="nome5">Brownie de Oreo</p>
                <img src="img/home/brownie.png" alt="brownie de oreo com leite ninho" class="img" width="70%" id="brownie">
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id6" id="id6" value="6">
                <p class="titulo-card" id="nome6">Açaí</p>
                <img src="img/home/açai.png" alt="açaí de 500ml" class="img" width="50%" id="img-acai">
            </div>
        </div>
    </div>

<!-- preço 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 41,00</div>
            <input type="hidden" id="preco4" value="41.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 17,99</div>
            <input type="hidden" id="preco5" value="17.99">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 18,50</div>
            <input type="hidden" id="preco6" value="18.50">
        </div>
    </div>

<!-- descrição 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc4" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc5">Oreo com Leite Ninho</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc6">Tradicional 500ml</p>
        </div>
    </div>

    <!-- add ao carrinho -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(4,9,1)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(5,9,1)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(6,9,1)">
        </div>
    </div>

<!-- imagens 3 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id7" id="id7" value="7">
                <p class="titulo-card" id="nome7">Crepe</p>
                <img src="img/home/crepe-doce.png" alt="crepe de chocolate e morangos" class="img" width="60%" id="img-crepe">
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id8" id="id8" value="8">
                <p class="titulo-card" id="nome8">Pizza</p>
                <img src="img/home/pizza.png" alt="pizza de calabresa" class="img" width="65%">
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <input type="hidden" name="id9" id="id9" value="9">
                <p class="titulo-card" id="nome9">Pastel</p>
                <img src="img/home/pastel.png" alt="pastel de frango com catupiry" class="img" width="60%">
            </div>
        </div>
    </div>

<!-- preço 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 25,90</div>
            <input type="hidden" id="preco7" value="25.90">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 75,80</div>
            <input type="hidden" id="preco8" value="75.80">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 7,50</div>
            <input type="hidden" id="preco9" value="7.50">
        </div>
    </div>

<!-- descricação 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc7">Chocolate e Morangos</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc8">Calabresa - M</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc9">Frango com Catupiry</p>
        </div>
    </div>

    <!-- add ao carrinho -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(7,9,1)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(8,9,1)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(9,9,1)">
        </div>
    </div>

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