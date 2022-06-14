//Interação curtir

function comentar(){
    //Selecionando botão comentar
    const btn__comentar = document.getElementById("btn__comentar");
    let checkbox__comentar = document.getElementById("checkbox__comentar");
    if(checkbox__comentar.checked){
        //Mudando cor do ícone para azul
        btn__comentar.style.color = "#5570FF";
        //Deixando o checkbox não checado
        checkbox__comentar = document.getElementById("checkbox__comentar").removeAttribute("checked");
        //Diminuindo valor do like
        let valor__comentar = document.getElementById("valor__comentar").innerText;
        valor__comentar = parseInt(valor__comentar);
        valor__comentar = document.getElementById("valor__comentar").value = valor__comentar - 1;
        valor__comentar = document.getElementById("valor__comentar").innerHTML = valor__comentar
        //fazendo caixa para inserir comentário aparecer
        const texto__comentario = document.getElementById("texto__comentario").style.display="none";
        const submit__comentario = document.getElementById("submit__comentario").style.display="none";
    }else{
        //Mudando cor do ícone para verde
        btn__comentar.style.color = "#34B132";
        //Deixando checkbox checado
        checkbox__comentar = document.getElementById("checkbox__comentar");
        checkbox__comentar.setAttribute('checked', '');
        //Aumentando valor do like
        let valor__comentar = document.getElementById("valor__comentar").innerText;
        valor__comentar = parseInt(valor__comentar);
        valor__comentar = document.getElementById("valor__comentar").value = valor__comentar + 1;
        valor__comentar = document.getElementById("valor__comentar").innerHTML = valor__comentar
        //fazendo caixa para inserir comentário aparecer
        const texto__comentario = document.getElementById("texto__comentario").style.display="flex";
        const submit__comentario = document.getElementById("submit__comentario").style.display="flex";
    }
}