function atualizar(){
    window.location.reload(true);
}
function avaliar(){
    alert("Avaliação salva com sucesso!");
    window.location.href = "home.php";
}

function adicionar(verifica, fim, comeco){
    var quant = parseInt(prompt("Digite a quantidade que você deseja desse produto:")); 
    if(quant > 0){
        for(var i = comeco; i <= fim; i++){ 
            var nome = document.getElementById('nome'.concat(i)).innerHTML;
            var desc = document.getElementById('desc'.concat(i)).innerHTML;
            var preco = document.getElementById('preco'.concat(i)).value;
            var id = document.getElementById('id'.concat(i)).value;
            var valor = preco * quant;
            var total = valor.toFixed(2);

            if(i == verifica){
                console.log(quant + nome + desc + preco + id + total);
                $.ajax({
                    url: 'php/processo.php', 
                    method: 'POST',
                    data: {quant: quant, nome: nome, desc: desc, preco: preco, id: id, total: total}, 
                    dataType: 'JSON'
                }).done(function(result){
                    console.log(result);
                })
            }
        }
    }  else{
        alert("Digite um número válido!");
    }
}

function salvoSucesso(){
    alert("Cadastro efetuado com sucesso!");
    window.location.href = "index.php";
}
