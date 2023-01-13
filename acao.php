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
            header('Location: home.php');
        }
        else{
            header('Location: index.php');
        }
    } 
    elseif ($acao == "logoff"){
        session_start();
        session_destroy();
        header('Location: index.php');
    }
    // elseif($acao == "cadastre"){
    //     $nome = isset($_POST['nome']) ? $_POST['nome'] : ""; 
    //     $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "";
    //     $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    //     $rg = isset($_POST['rg']) ? $_POST['rg'] : "";
    //     $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
    //     $celular = isset($_POST['celular']) ? $_POST['celular'] : "";
    //     $email = isset($_POST['email']) ? $_POST['email'] : "";
    //     $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : "";
    //     $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
    //     $numeroEndereco = isset($_POST['numeroEndereco']) ? $_POST['numeroEndereco'] : "";
    //     $cep = isset($_POST['cep']) ? $_POST['cep'] : "";
    //     $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
    //     $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
    //     $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
    //     $complemento = isset($_POST['complemento']) ? $_POST['complemento'] : "";
    //     $user = [$nome,$sexo,$cpf,$rg,$telefone,$celular,$email,$nascimento,$endereco,$numeroEndereco,$cep,$bairro,$estado,$cidade,$complemento];

    //     session_start();
    //     $_SESSION['nome'] = $nome;
    //     $_SESSION['sexo'] = $sexo;
    //     header('Location: usuario.php');
    // }
?>