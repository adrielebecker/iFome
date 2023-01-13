<?php
    header('Content-Type: application/json'); // vai trabalhar com json. 
    $quant = isset($_POST['quant']) ? $_POST['quant'] : 0;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
    $preco = isset($_POST['preco']) ? $_POST['preco'] : 0;
    $desc = isset($_POST['desc']) ? $_POST['desc'] : 0;
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $caminho = "json/index.json";

 //envia os dados pro array

    if(file_exists($caminho)){ 

        $dados = array("id" => $id,
        "quant" => $quant,
        "nome" => $nome,
        "preco" => $preco,
        "desc" => $desc);
        
        $json = file_get_contents($caminho);
        $json = json_decode($json, true);
        $json[] = $dados;
        $json = json_encode($json);
        file_put_contents($caminho, $json);
        header('Location: listar.php');

        // $json = json_encode($dados); //transforma os dados em formato json
        // $arquivo = file_put_contents($caminho, $json); //escreve no json
    }
?>