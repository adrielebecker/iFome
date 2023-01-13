<?php
    $acao = "";
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
            break;
        case 'POST':
            $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
            break;
    }

    if($acao == "login"){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
        $senha = isset($_POST['senha']) ? $_POST['senha'] : "1";

        if($nome == "admin" && $senha == "admin"){
            session_start();
            $_SESSION['nome'] = $nome;
            header('Location: ../home.php');
        } else{
            header('Location: ../index.php');
        }
    } elseif ($acao == "logoff"){
        session_start();
        session_destroy();
        header('Location: ../index.php');
    }
?>