<?php
    header('Content-Type: application/json');  
    $quant = isset($_POST['quant']) ? $_POST['quant'] : 0;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
    $preco = isset($_POST['preco']) ? $_POST['preco'] : 0;
    $desc = isset($_POST['desc']) ? $_POST['desc'] : 0;
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $total = isset($_POST['total']) ? $_POST['total'] : 0;
    $caminho = "../json/index.json";

    if(file_exists($caminho)){ 

        $dados = array("id" => $id,
        "quant" => $quant,
        "nome" => $nome,
        "preco" => $preco,
        "desc" => $desc,
        "total" => $total);

        $json = file_get_contents($caminho);
        $json = json_decode($json, true);
        $json[] = $dados;
        $json = json_encode($json);
        file_put_contents($caminho, $json);
        header('Location: php/listar.php');
    }
?>