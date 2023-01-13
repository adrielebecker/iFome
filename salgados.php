<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salgados</title>
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
            <h3 class="text-nav mt-3">Salgados</h3>
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

<!-- banner salgados -->
    <div class="row mt-5">
        <div class="col-12">
            <figure>
                <img src="img/salgados/banner-salgados.png" alt="banner salgados" class="banner">
            </figure>
        </div>
    </div>

<!-- imagens 1 linha -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="opcoes">
            <input type="hidden" name="id10" id="id10" value="10">
            <p class="titulo-card" id="nome10">Coxinha</p>
                <figure>
                    <img src="img/salgados/coxinha.png" alt="coxinha de frango com catupiry" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome11">Pastel</p>
                <figure>
                    <input type="hidden" name="id11" id="id11" value="11">
                    <img src="img/salgados/pastel.png" alt="pastel de carne" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome12">Crepe</p>
                <figure>
                    <input type="hidden" name="id12" id="id12" value="12">
                    <img src="img/salgados/crepe-salgado.png" alt="crepe de frango" class="img" width="60%" id="img-crepe">
                </figure>
            </div>
        </div>
    </div>

<!-- preço das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 6,50</div>
            <input type="hidden" id="preco10" value="6.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 6,50</div>
            <input type="hidden" id="preco11" value="6.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 25,90</div>
            <input type="hidden" id="preco12" value="25.90">
        </div>
    </div>

<!-- descrição das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc10">Frango com Catupiry</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc11">Carne</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc12">Crepe de Frango</p>
        </div>
    </div>

<!-- add ao carrinho 1 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(10,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(11,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(12,24,10)">
        </div>
    </div>

<!-- imagens 2 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome13">Enroladinho</p>
                <figure>
                    <input type="hidden" name="id13" id="id13" value="13">
                    <img src="img/salgados/enr-salsicha.png" alt="Enroladinho de salsicha" class="img" width="75%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
                <p class="titulo-card" id="nome14">Bolinha</p>
                <figure>
                    <input type="hidden" name="id14" id="id14" value="14">
                    <img src="img/salgados/bol-queijo.png" alt="Bolinha de queijo" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome15">Travesseirinho</p>
                <figure>
                    <input type="hidden" name="id15" id="id15" value="15">
                    <img src="img/salgados/travesseirinho.png" alt="Travesseirinho de frango" class="img" width="60%" id="img-travesse">
                </figure>
            </div>
        </div>
    </div>

<!-- preço 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 4,50</div>
            <input type="hidden" id="preco13" value="4.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 5,50</div>
            <input type="hidden" id="preco14" value="5.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 5,90</div>
            <input type="hidden" id="preco15" value="5.90">
        </div>
    </div>

<!-- descrição 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc13">Salsicha</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc14">Queijo</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc15">Frango</p>
        </div>
    </div>

<!-- add ao carrinho 2 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(13,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(14,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(15,24,10)">
        </div>
    </div>

<!-- imagens 3 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome16">Empada</p>
                <figure>
                    <input type="hidden" name="id16" id="id16" value="16"> 
                    <img src="img/salgados/empada.png" alt="Empada de frango com catupiry" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome17">Croquete</p>
                <figure>
                    <input type="hidden" name="id17" id="id17" value="17">
                    <img src="img/salgados/croquete.png" alt="croquete de frango" class="img" width="60%" id="img-croquete">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome18">Croissant</p>
                <figure>
                    <input type="hidden" name="id18" id="id18" value="18">
                    <img src="img/salgados/croissant.png" alt="Croissant de pizza" class="img" width="60%" id="img-croissant">
                </figure>
            </div>
        </div>    
    </div>

<!-- preço 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 4,70</div>
            <input type="hidden" id="preco16" value="4.70">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 3,99</div>
            <input type="hidden" id="preco17" value="3.99">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 6,99</div>
            <input type="hidden" id="preco18" value="6.99">
        </div>
    </div>

<!-- descricação 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc16">Frango com Catupiry</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc17">Frango</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc18">Pizza</p>
        </div>
    </div>

<!-- add ao carrinho 3-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(16,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(17,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(18,24,10)">
        </div>
    </div>


<!-- imagens 4 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome19">Torta</p>
            <figure>
                <input type="hidden" name="id19" id="id19" value="19">
                <img src="img/salgados/tortaSalgada.png" alt="torta de frango com requeijão" class="img" width="65%">
            </figure>
        </div>
      </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome20">Pão de Queijo</p>
            <figure>
                <input type="hidden" name="id20" id="id20" value="20">
                <img src="img/salgados/pao-queijo.png" alt="pão de queijo" class="img" width="70%" id="img-paoqueijo">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome21">Esfiha</p>
            <figure>
                <input type="hidden" name="id21" id="id21" value="21">
                <img src="img/salgados/esfiha.png" alt="Esfiha de carne" class="img" width="65%" id="img-esfiha">
            </figure>
        </div>
    </div> 
</div>

<!-- preço 4 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco" id="preco19">R$ 8,75</div>
        <input type="hidden" id="preco19" value="8.75">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 6,50</div>
        <input type="hidden" id="preco20" value="6.50">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 4,90</div>
        <input type="hidden" id="preco21" value="4.90">
    </div>
</div>

<!-- descricação 4 linha -->
<div class="row">
    <div class="col-md-4">
        <p class="descricao-card" id="desc19">Frango com Requeijão</p>
    </div>
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc20" value="Sem descrição">
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc21">Carne</p>
    </div>
</div>

<!-- add ao carrinho 4 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(19,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(20,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(21,24,10)">
        </div>
    </div>

<!-- imagens 5 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome22">Enroladinho</p>
            <figure>
                <input type="hidden" name="id22" id="id22" value="22">
                <img src="img/salgados/enr-presunto.png" alt="enroladinho de presunto e queijo" class="img" width="60%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome23">Risoles</p>
            <figure>
                <input type="hidden" name="id23" id="id23" value="23">
                <img src="img/salgados/risoles.png" alt="Risoles de carne" class="img" id="img-risoles" width="65%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome24">Bolinha</p>
            <figure>
                <input type="hidden" name="id24" id="id24" value="24">
                <img src="img/salgados/bol-mandioca.png" alt="bolinha de mandioca" class="img" width="60%" id="img-bolmandi">
            </figure>
        </div>
    </div>
</div>

<!-- preço 5 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 3,50</div>
        <input type="hidden" id="preco22" value="3.50">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 6,50</div>
        <input type="hidden" id="preco23" value="6.50">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 5,90</div>
        <input type="hidden" id="preco24" value="5.90">
    </div>
</div>

<!-- descricação 5 linha -->
<div class="row">
    <div class="col-md-4">
        <p class="descricao-card" id="desc22">Presunto e Queijo</p>
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc23">Carne</p>
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc24">Mandioca</p>
    </div>
</div>

<!-- add ao carrinho 5 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(22,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(23,24,10)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(24,24,10)">
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