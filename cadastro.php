<!DOCTYPE html>
<?php   
    session_start();
    isset($_SESSION['dados']);
    $nome = isset($_POST['nome']) ? $_POST['nome'] : ""; 
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "";
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    $rg = isset($_POST['rg']) ? $_POST['rg'] : "";
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
    $celular = isset($_POST['celular']) ? $_POST['celular'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : "";
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
    $numeroEndereco = isset($_POST['numeroEndereco']) ? $_POST['numeroEndereco'] : "";
    $cep = isset($_POST['cep']) ? $_POST['cep'] : "";
    $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
    $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
    $complemento = isset($_POST['complemento']) ? $_POST['complemento'] : "";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="js/funcoes.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row text-center mt-3">
            <div class="col-12">
                <h3 class="cadastro-font">Meu perfil</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <form action="index.php" method="post">
                    <label for="nome" class="cadastro-font">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o Nome" value="<?= $nome;?>">
            </div>
            <div class="col-md-2">
                <label for="sexo" class="cadastro-font">Sexo</label>
                <select name="sexo" id="sexo" class="form-control">
                    <option value="masculino" <?php if($sexo == "masculino"){echo "selected";}?>>Masculino</option>
                    <option value="feminino" <?php if($sexo == "feminino"){echo "selected";}?>>Feminino</option>
                    <option value="outro" <?php if($sexo == "outro"){echo "selected";}?>>Outro</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="cpf" class="cadastro-font">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe o CPF" value="<?= $cpf;?>">
            </div>
            <div class="col-md-3">
                <label for="rg" class="cadastro-font">RG</label>
                <input type="text" name="rg" id="rg" class="form-control" placeholder="Informe o RG" value="<?= $rg; ?>">
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="telefone" class="cadastro-font">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Informe o Telefone" value="<?=$telefone;?>">
            </div>
            <div class="col-md-3">
                <label for="celular" class="cadastro-font">Celular</label>
                <input type="tel" name="celular" id="celular" class="form-control" placeholder="Informe o Celular" value="<?=$celular;?>">
            </div>
            <div class="col-md-4">
                <label for="email" class="cadastro-font">E-mail</label>
                <input type="email" name="email" id="nome" class="form-control" placeholder="Informe o E-mail" value="<?=$email;?>">
            </div>
            <div class="col-md-2">
                <label for="nascimento" class="cadastro-font">Data de Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control" value="<?=$nascimento;?>">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <label for="endereco" class="cadastro-font">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Informe o Endereço" value="<?=$endereco;?>">
            </div>
            <div class="col-md-2">
                <label for="numeroEndereco" class="cadastro-font">Número</label>
                <input type="text" name="numeroEndereco" id="numeroEndereco" class="form-control" placeholder="Informe o Número" value="<?=$numeroEndereco;?>">
            </div>
            <div class="col-md-2">
                <label for="cep" class="cadastro-font">CEP</label>
                <input type="text" name="cep" id="cep" class="form-control" placeholder="Informe o CEP" value="<?=$cep;?>">
            </div>
            <div class="col-md-2">
                <label for="bairro" class="cadastro-font">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Informe o Bairro" value="<?=$bairro;?>">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-2">
                <label for="estado" class="cadastro-font">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="AC" <?php if($estado == "AC"){echo "selected";}?>>Acre</option>
                    <option value="AL" <?php if($estado == "AL"){echo "selected";}?>>Alagoas</option>
                    <option value="AP" <?php if($estado == "AP"){echo "selected";}?>>Amapá</option>
                    <option value="AM" <?php if($estado == "AM"){echo "selected";}?>>Amazonas</option>
                    <option value="BA" <?php if($estado == "BA"){echo "selected";}?>>Bahia</option>
                    <option value="CE" <?php if($estado == "CE"){echo "selected";}?>>Ceará</option>
                    <option value="ES" <?php if($estado == "ES"){echo "selected";}?>>Espírito Santo</option>
                    <option value="GO" <?php if($estado == "GO"){echo "selected";}?>>Goiás</option>
                    <option value="MA" <?php if($estado == "MA"){echo "selected";}?>>Maranhão</option>
                    <option value="MT" <?php if($estado == "MT"){echo "selected";}?>>Mato Grosso</option>
                    <option value="MS" <?php if($estado == "MS"){echo "selected";}?>>Mato Grosso do Sul</option>
                    <option value="MG" <?php if($estado == "MG"){echo "selected";}?>>Minas Gerais</option>
                    <option value="PA" <?php if($estado == "PA"){echo "selected";}?>>Pará</option>
                    <option value="PB" <?php if($estado == "PB"){echo "selected";}?>>Paraíba</option>
                    <option value="PR" <?php if($estado == "PR"){echo "selected";}?>>Paraná</option>
                    <option value="PE" <?php if($estado == "PE"){echo "selected";}?>>Pernambuco</option>
                    <option value="PI" <?php if($estado == "PI"){echo "selected";}?>>Piauí</option>
                    <option value="RJ" <?php if($estado == "RJ"){echo "selected";}?>>Rio de Janeiro</option>
                    <option value="RN" <?php if($estado == "RN"){echo "selected";}?>>Rio Grande do Norte</option>
                    <option value="RS" <?php if($estado == "RS"){echo "selected";}?>>Rio Grande do Sul</option>
                    <option value="RO" <?php if($estado == "RO"){echo "selected";}?>>Rondônia</option>
                    <option value="RR" <?php if($estado == "RR"){echo "selected";}?>>Roraima</option>
                    <option value="SC" <?php if($estado == "SC"){echo "selected";}?>>Santa Catarina</option>
                    <option value="SP" <?php if($estado == "SP"){echo "selected";}?>>São Paulo</option>
                    <option value="SE" <?php if($estado == "SE"){echo "selected";}?>>Sergipe</option>
                    <option value="TO" <?php if($estado == "TO"){echo "selected";}?>>Tocantins</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="cidade" class="cadastro-font">Cidade</label>
                <input type="tetx" name="cidade" id="cidade" class="form-control" placeholder="Informe a Cidade" value="<?=$cidade;?>">
            </div>
            <div class="col-md-8">
                <label for="complemento" class="cadastro-font">Complemento</label>
                <input type="tetx" name="complemento" id="complemento" class="form-control" placeholder="Informe o Complemento" value="<?=$complemento;?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 mt-3">
                <button class="btn btn-success cadastro-font" value="salvar" onclick="salvoSucesso()">Salvar</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>