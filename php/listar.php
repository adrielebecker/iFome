<?php
    header('Content-Type: application/json');
    $caminho = "../json/index.json";
    $acao = "";
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
            break;
        case 'POST':
            $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
            break;
    }
    if(file_exists($caminho)){
        $json = file_get_contents($caminho);
        $dado = json_decode($json, true);
        echo json_encode($dado);
    } else{
        echo json_encode("Erro ao listar");
    }
?>