<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
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
            <h3 class="text-nav mt-3">Bebidas</h3>
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

<!-- banner bebidas -->
    <div class="row mt-5">
        <div class="col-12">
            <figure>
                <img src="img/bebidas/banner-bebidas.png" alt="banner salgados" class="banner">
            </figure>
        </div>
    </div>

<!-- imagens 1 linha -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome55">Coca-Cola</p>
                <figure>
                    <input type="hidden" name="id55" id="id55" value="55">
                    <img src="img/bebidas/coca-lata.png" alt="coca cola lata" class="img" width="55%" id="img-cocalata">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome56">Pepsi</p>
                <figure>
                    <input type="hidden" name="id56" id="id56" value="56">
                    <img src="img/bebidas/pepsi-lata.png" alt="pepsi lata" class="img" width="90%" id="img-pepsilata">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome57">Guaraná</p>
                <figure>
                    <input type="hidden" name="id57" id="id57" value="57">
                    <img src="img/bebidas/guarana-lata.png" alt="guarana lata" class="img" width="65%" id="img-guaranalata">
                </figure>
            </div>
        </div>
    </div>

<!-- preço das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 4,80</div>
            <input type="hidden" id="preco55" value="4.80">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 4,80</div>
            <input type="hidden" id="preco56" value="4.80">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 4,25</div>
            <input type="hidden" id="preco57" value="4.25">
        </div>
    </div>

<!-- descrição das imagens 1 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc55">350 ml</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc56">350 ml</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc57">350 ml</p>
        </div>
    </div>

<!-- add ao carrinho 1-->
    <div class="row">
        <div class="col-md-4">    
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(55,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(56,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(57,69,55)">
        </div>
    </div>

<!-- imagens 2 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome58">Coca-Cola</p>
                <figure>
                    <input type="hidden" name="id58" id="id58" value="58">
                    <img src="img/bebidas/coca1l.png" alt="coca cola 1 litro" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome59">Pepsi</p>
                <figure>
                    <input type="hidden" name="id59" id="id59" value="59">
                    <img src="img/bebidas/pepsi1l.png" alt="pepsi 1 litro" class="img" width="62%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome60">Guaraná</p>
                <figure>
                    <input type="hidden" name="id60" id="id60" value="60">
                    <img src="img/bebidas/guarana1l.png" alt="guarana 1 litro" class="img" width="64%" id="img-guarana1l">
                </figure>
            </div>
        </div>
    </div>

<!-- preço 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 9,90</div>
            <input type="hidden" id="preco58" value="9.90">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 9,90</div>
            <input type="hidden" id="preco59" value="9.90">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 8,90</div>
            <input type="hidden" id="preco60" value="8.90">
        </div>
    </div>

<!-- descrição 2 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc58">1 litro</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc59">1 litro</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc60">1 litro</p>
        </div>
    </div>

<!-- add ao carrinho 2-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(58,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(59,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(60,69,55)">
        </div>
    </div>

<!-- imagens 3 linha -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome61">Suco</p>
                <figure>
                    <input type="hidden" name="id61" id="id61" value="61"> 
                    <img src="img/bebidas/suco-uva.png" alt="Suco de Uva" class="img" width="60%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome62">Suco</p>
                <figure>
                <input type="hidden" name="id62" id="id62" value="62">
                    <img src="img/bebidas/suco-laranja.png" alt="suco de laranja" class="img" width="58%">
                </figure>
            </div>
        </div>
        <div class="col-md-4">
            <div class="opcoes">
              <p class="titulo-card" id="nome63">Chá</p>
                <figure>
                    <input type="hidden" name="id63" id="id63" value="63">
                    <img src="img/bebidas/cha.png" alt="Chá de camomila" class="img" width="60%" id="img-cha">
                </figure>
            </div>
        </div>  
    </div>

<!-- preço 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <div class="preco">R$ 7,50</div>
            <input type="hidden" id="preco61" value="7.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 7,50</div>
            <input type="hidden" id="preco62" value="7.50">
        </div>
        <div class="col-md-4">
            <div class="preco">R$ 2,50</div>
            <input type="hidden" id="preco63" value="2.50">
        </div>
    </div>

<!-- descricação 3 linha -->
    <div class="row">
        <div class="col-md-4">
            <p class="descricao-card" id="desc61">Uva</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc62">Laranja</p>
        </div>
        <div class="col-md-4">
            <p class="descricao-card" id="desc63">Camomila</p>
        </div>
    </div>

<!-- add ao carrinho 3-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(61,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(62,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(63,69,55)">
        </div>
    </div>

<!-- imagens 4 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome64">Capuccino</p>
            <figure>
                <input type="hidden" name="id64" id="id64" value="64">
                <img src="img/bebidas/capuccino.png" alt="capuccino" class="img" width="70%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome65">Café</p>
            <figure>
                <input type="hidden" name="id65" id="id65" value="65">  
                <img src="img/bebidas/cafe.png" alt="café" class="img" id="img-cafe" width="80%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome66">Café com Leite</p>
            <figure>
                <input type="hidden" name="id66" id="id66" value="66">
                <img src="img/bebidas/cafe-leite.png" alt="café com leite" class="img" width="60%" id="img-cafe-leite">
            </figure>
        </div>
    </div>
</div>

<!-- preço 4 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 8,90</div>
        <input type="hidden" id="preco64" value="8.90">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 4,00</div>
        <input type="hidden" id="preco65" value="4.00">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 4,00</div>
        <input type="hidden" id="preco66" value="4.00">
    </div>
</div>

<!-- descricação 4 linha -->
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc64" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc65" value="Sem descrição">
        </div>
        <div class="col-md-4">
            <input type="hidden" class="descricao-card" id="desc66" value="Sem descrição">
        </div>
    </div>

<!-- add ao carrinho 4-->
    <div class="row">
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(64,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(65,69,55)">
        </div>
        <div class="col-md-4">
            <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(66,69,55)">
        </div>
    </div>

<!-- imagens 5 linha -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome67">Milkshake</p>
            <figure>
                <input type="hidden" name="id67" id="id67" value="67">
                <img src="img/bebidas/milk-morango.png" alt="Milkshake de morango" class="img" width="60%">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome68">Milkshake</p>
            <figure>
                <input type="hidden" name="id68" id="id68" value="68">
                <img src="img/bebidas/milk-choco.png" alt="Milkshake de chocolate" class="img" width="70%" id="img-milk-choco">
            </figure>
        </div>
    </div>
    <div class="col-md-4">
        <div class="opcoes">
          <p class="titulo-card" id="nome69">Milkshake</p>
            <figure>
                <input type="hidden" name="id69" id="id69" value="69">
                <img src="img/bebidas/milk-baunilha.png" alt="milkshake de baunilha" class="img" width="80%" id="img-milk-baunilha">
            </figure>
        </div>
    </div>
</div>

<!-- preço 5 linha -->
<div class="row">
    <div class="col-md-4">
        <div class="preco">R$ 11,25</div>
        <input type="hidden" id="preco67" value="11.25">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 11,25</div>
        <input type="hidden" id="preco68" value="11.25">
    </div>
    <div class="col-md-4">
        <div class="preco">R$ 11,25</div>
        <input type="hidden" id="preco69" value="11.25">
    </div>
</div>

<!-- descricação 5 linha -->
<div class="row">
    <div class="col-md-4">
        <p class="descricao-card" id="desc67">Morango</p>
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc68">Chocolate</p>
    </div>
    <div class="col-md-4">
        <p class="descricao-card" id="desc69">Baunilha</p>
    </div>
</div>

<!-- add ao carrinho 5-->
<div class="row">
    <div class="col-md-4">
        <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(67,69,55)">
    </div>
    <div class="col-md-4">
        <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(68,69,55)">
    </div>
    <div class="col-md-4">
        <img src="img/compras/adicionar-ao-carrinho-de-compras.png" alt="" class="add-card-img" onclick="adicionar(69,69,55)">
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