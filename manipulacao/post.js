$(document).ready(function (){ //Se o documento feed estiver pronto 100% carregado
    $("#submitPost").click(function (){ // se o botão de post for clicado
       var form = new FormData($("#enviaPosts")[0]); //é tipo criar um novo formulário mas ao mesmo tempo não, o id que tá ali dentro é o id do formulário
       $.ajax({ // aqui na frente tem os dados do ajax, ele precisa de todos
           url: 'feed.php', // pra onde que ele manda essas info
           type: 'post', //é o metodo do formulario
           dataType: 'json',
           cache: false,
           processData: false,
           contentType: false,
           data: form,
           timeout: 8000, // isso aqui é o tempo que ele tenta fazer a requisição, por padrão deixei 8s
           success: function(resultado){ // se tudo ocorrer bem
               $("#aquiPost").html(resultado); //ele vai enviar os resultados do form do post dentro de algum elemento, no caso esse bagulho ai que eu coloquei é uma div
           }
       });
    });
});

