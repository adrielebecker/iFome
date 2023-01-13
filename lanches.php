<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanches</title>
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
            <h3 class="text-nav mt-3">Lanches</h3>
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

<!-- banner lanches -->
    <div class="row mt-2">
        <div class="col-12">
            <figure>
                <img src="img/lanches/banner-lanches.png" alt="banner salgados" class="banner">
            </figure>
        </div>
    </div>

<!-- imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome40">X-Salada</p>
                <figure>
                    <input type="hidden" name="id40" id="id40" value="40">
                    <img src="img/lanches/xsalada.png" alt="x salada" class="img" width="60%">
                </figure>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome41">X-Bacon</p>
                <figure>
                    <input type="hidden" name="id41" id="id41" value="41">  
                    <img src="img/lanches/xbacon.png" alt="x bacon" class="img" width="55%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome42">X-Frango</p>
                <figure>
                    <input type="hidden" name="id42" id="id42" value="42">   
                    <img src="img/lanches/xfrango.png" alt="x frango" class="img" width="62%">
                </figure>
            </div>
        </div>
    </div>

<!-- preço das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 18,00</div>
            <input type="hidden" id="preco40" value="18.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 23,90</div>
            <input type="hidden" id="preco41" value="23.90">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 22,80</div>
            <input type="hidden" id="preco42" value="22.80">
        </div>
    </div>

<!-- descrição das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc40" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc41" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc42" value="Sem descrição">
        </div>
    </div>

<!-- add ao carrinho 1 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(40,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(41,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(42,54,40)">
        </div>
    </div>

<!-- imagens 2 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome43">Misto Quente</p>
                <figure>
                    <input type="hidden" name="id43" id="id43" value="43">
                    <img src="img/lanches/mistoque.png" alt="misto quente" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome44">Sanduíche Natural</p>
                <figure>
                    <input type="hidden" name="id44" id="id44" value="44">
                    <img src="img/lanches/sandnatural.png" alt="Sanduíche natural" class="img" id="img-sandnatu" width="55%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome45">Baguete Folhada</p>
                <figure>
                    <input type="hidden" name="id45" id="id45" value="45">
                    <img src="img/lanches/baguete.png" alt="Baguete Folhada" class="img" id="img-baguete" width="70%">
                </figure>
            </div>
        </div>
    </div>

<!-- preço 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 8,00</div>
            <input type="hidden" id="preco43" value="8.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 5,50</div>
            <input type="hidden" id="preco44" value="5.50">
        </div> 
        <div class="col-md-4">
            <div class="preco">R$ 5,90</div>
            <input type="hidden" id="preco45" value="5.90">
        </div>
    </div>

<!-- descrição 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc43" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc44" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc45" value="Sem descrição">
        </div>
    </div>
    
<!-- add ao carrinho 2 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(43,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(44,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(45,54,40)">
        </div>
    </div>

<!-- imagens 3 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome46">Cachorro Quente</p>
                <figure>
                    <input type="hidden" name="id46" id="id46" value="46">
                    <img src="img/lanches/hotdog.png" alt="cachorro quente" class="img" width="65%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome47">X-Costela</p>
                <figure>
                    <input type="hidden" name="id47" id="id47" value="47">
                    <img src="img/lanches/xcostela.png" alt="x costela" class="img" id="img-xcostela" width="70%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome48">X-Calabresa</p>
                <figure>
                    <input type="hidden" name="id48" id="id48" value="48">
                    <img src="img/lanches/xcalabresa.png" alt="x calabresa" class="img" id="img-xcalabresa" width="55%">
                </figure>
            </div>
        </div>    
    </div>

<!-- preço 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 11,00</div>
            <input type="hidden" id="preco46" value="11.00">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 24,99</div>
            <input type="hidden" id="preco47" value="24.99">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 16,99</div>
            <input type="hidden" id="preco48" value="16.99">
        </div>
    </div>

<!-- descricação 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc46" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc47" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc48" value="Sem descrição">
        </div>
    </div>

<!-- add ao carrinho 3 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(46,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(47,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(48,54,40)">
        </div>
    </div>

<!-- imagens 4 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome49">Batata Frita</p>
            <figure>
                <input type="hidden" name="id49" id="id49" value="49">
                <img src="img/lanches/fritasP.png" alt="Batata frita tamanho P" class="img" width="65%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome50">Batata Frita</p>
            <figure>
                <input type="hidden" name="id50" id="id50" value="50">
                <img src="img/lanches/fritasM.png" alt="batata frita tamanho M" class="img" width="55%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome51">Batata Frita</p>
            <figure>
                <input type="hidden" name="id51" id="id51" value="51">
                <img src="img/lanches/fritasG.png" alt="batata frita tamanho G" class="img" id="img-fritasG" width="75%">
            </figure>
        </div>
    </div> 
</div>

<!-- preço 4 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 8,50</div>
        <input type="hidden" id="preco49" value="8.50">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 14,70</div>
        <input type="hidden" id="preco50" value="14.70">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 19,90</div>
        <input type="hidden" id="preco51" value="19.90">
    </div>
</div>

<!-- descricação 4 linha -->
<div class="row">
    <div class="col-md-4">
        <p class="descricao-card" id="desc49">P</p>
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc50">M</p>
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc51">G</p>
    </div>
</div>

<!-- add ao carrinho 4 -->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(49,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(50,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(51,54,40)">
        </div>
    </div>

<!-- imagens 5 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome52">X-Coração</p>
            <figure>
                <input type="hidden" name="id52" id="id52" value="52">
                <img src="img/lanches/xcoracao.png" alt="x coração" class="img" width="70%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome53">X-Burguer</p>
            <figure>
                <input type="hidden" name="id53" id="id53" value="53">
                <img src="img/lanches/xburguer.png" alt="x burgues" class="img" width="60%" id="img-xburguer">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome54">X-Dog</p>
            <figure>
                <input type="hidden" name="id54" id="id54" value="54">
                <img src="img/lanches/xdog.png" alt="x dog" class="img" id="img-xdog" width="70%">
            </figure>
        </div>
    </div>
</div>

<!-- preço 5 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 24,50</div>
        <input type="hidden" id="preco52" value="24.50">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 14,25</div>
        <input type="hidden" id="preco53" value="14.25">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 15,50</div>
        <input type="hidden" id="preco54" value="15.50">
    </div>
</div>

<!-- descricação 5 linha -->
<div class="row">
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc52" value="Sem descrição">
    </div>
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc53" value="Sem descrição">
    </div>
    <div class="col-md-4">
        <input type="hidden" class="descricao-card" id="desc54" value="Sem descrição">
    </div>
</div>

<!-- add ao carrinho 5-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(52,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(53,54,40)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(54,54,40)">
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