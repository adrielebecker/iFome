<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicial.css">
    <title>Tela Inicial</title>
</head>
<body>
    <form action="" method="post">
            <ul>
                <figure id=logo><img src="img/logo.png" alt="Logo do iFome"></figure>
                <button id="surpre">Surpreenda-me</button>
                <input type="text" name="procurar" id="procurar" placeholder="Pesquisar por um item">
            </ul>
            <ul>
            <figure>
            <li class="options"><img src="img/salgadosHome.png" alt="Imagem de uma coxinha">
                <figcaption>Salgados</figcaption></li>
            <li class="options"><img src="img/docesHome.png" alt="Imagem de um bolo">
                <figcaption>Doces && Bolos</figcaption></li>
            <li class="options"><img src="img/lanchesHome.png" alt="Imagem de um x salada">
                <figcaption>Lanches</figcaption></li>
            <li class="options"><img src="img/bebidasHome.png" alt="Imagem de várias latas de refrigerante">
                <figcaption>Bebidas</figcaption></li>
            <li class="options"><img src="img/pizzaHome.png" alt="Imagem de uma pizza">
                <figcaption>Pizza</figcaption></li>
            </figure>
            </ul>
            <!--colocar a div sugest dentro da msm tabela-->
            <div id="suges">
                <ul>
                    <figure>
                        <figcaption>Sugestões de porções</figcaption>
                        <div id="primeira"><li class="sugest"><img src="img/fritasSugest.png" alt="Porção de batatas fritas">
                            <figcaption>Porção de fritas com filé</figcaption></li></div>
                        <div id="meio"><li class="sugest"><img src="img/frangoSugest.png" alt="Porção de frango grelhado">
                            <figcaption>Porção de frango grelhado</figcaption></li></div>
                        <div id="ultima"><li class="sugest"><img src="img/sushiSugest.png" alt="Porção de sushi">
                            <figcaption>Porção de sushi</figcaption></li></div>
                    </figure>
                </ul>
            </div>
            <table>
                <tr>
                    <td class="celula">
                        <figure>
                            <figcaption class="titulo">Bolo</figcaption>
                            <img src="img/boloHome.png" alt="Bolo de leite ninho com nutella" class="imagem">
                            <div class="preco">R$19,90</div>
                            <figcaption class="legenda">Leite ninho com nutella</figcaption>
                        </figure>
                    </td>
                    <td class="celula">
                        2
                    </td>
                    <td class="celula">
                        3
                    </td>
                </tr>
            </table>
    </form>
</body>
</html>