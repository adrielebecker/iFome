<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>iFome</title>
</head>
<body> 
<ul>
    <li id="burguer"><figure><img src="img/hamburguer.png" alt="X salada"></figure></li><!--
--><li id="ifome"><figure><img src="img/iFome.png" alt="Logo iFome"></figure></li><!--
--><li id="bolo"><figure><img src="img/bolo.png" alt="Bolo de chocolate"></figure></li>
</ul>
<form action="home.php" method="post">
    <fieldset id="login">
        <p id="minutos">Em minutos mate a sua fome!</p>
        <p class="fonte">Faça o seu login:</p>
        <label for="nome" class="pEscrita">Nome:</label><br>
        <input type="text" name="nome" id="nome" class="pInput"><br><br>
        <label for="senha" class="pEscrita">Senha:</label><br>
        <input type="password" name="nome" id="nome" class="pInput"><br><br><br>
        <input type="submit" id="entrar" value="Entrar"><br><br>
        <button id="cadastre">Cadastre-se</button>
    </fieldset>
</form>
<ul>
    <li id="pizza"><figure><img src="img/pizzaLogin.png" alt="Pizza de calabresa"></figure></li><!--
--><li id="sorvete"><figure><img src="img/sorvete.png" alt="Sorvete de Baunilha"></figure></li><br>
    <li id="dog"><figure><img src="img/cachorro.png" alt="Cachorro Quente"></figure></li><!--
--><li id="cupcake"><figure><img src="img/cupcake.png" alt="Cupcake de chocolate"></figure></li>
</ul>
</body>
</html>