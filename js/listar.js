window.addEventListener("load", function(){
    $.ajax({
        url: 'php/listar.php', 
        method: 'GET', 
        dataType: 'JSON'
    }).done(function(result){ 
        console.log(result);
        const size = Object.keys(result || {}).length;
        const lista = document.querySelector("#resultado"); 
        while (lista.firstChild) { 
            lista.firstChild.remove();
        }
            if(size > 0){
                for(var i = 0; i < size; i++){
                    $("#resultado").prepend("<tr><td>"+ result[i].nome +"</td><td>"+result[i].desc+"</td><td>"+ result[i].preco +"</td><td>"+result[i].quant+"</td><td>"+result[i].total+"</td></tr>");
                }
            } else {
                alert("Nenhum produto encontrado!");
                location.href = 'home.php';
            }
    });
});
