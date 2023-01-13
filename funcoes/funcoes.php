<?php
    $result = [["Coxinha", "Pastel", "Crepe", "Enroladinho de Salsicha","Bolinha de Queijo","Travesseirinho","Empada","Croquete", "Croissant","Torta","Pão de Queijo","Esfiha","Enroladinho de Presunto e Queijo","Risoles","Bolinnha de Mandioca"], 
                ["Sonho","Croissant","Donuts","Cupcake","Brownie","Torta Alemã", "Bolo", "Crepe", "Açaí", "Tortinha", "Bolinho de Chuva", "Rocambole", "Alfajor", "Muffin", "Brigadeiro"],
                ["X-Salada","X-Bacon","X-Frango","Misto Quente","Sanduíche Natural","Baguete Folheada","Cachorro Quente", "X-Costela","X-Calabresa","Batata Frita P","Batata Frita M","Batata Frita G","X-Coração","X-Burguer","X-Dog"]
              ];

    function sorteio($result){
        $linha = rand(0, count($result)-1);
        $col = rand(0, count($result)-1);
        return $result[$linha][$col];
    }
?>