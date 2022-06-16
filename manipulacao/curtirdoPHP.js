//Interação curtir

function curtir(){
    //Selecionando botão curtir
    const btn__curtir = document.getElementById("btn__curtir");
    let checkbox__curtir = document.getElementById("checkbox__curtir");
    let valor__curtir = document.getElementById("valor__curtir");
    if(checkbox__curtir.checked){
        //Mudando cor do ícone para azul
        btn__curtir.style.color = "#5570FF";
        //Mudando cor do número de likes para azul
        valor__curtir.style.color = "#5570FF";
        //Deixando o checkbox não checado
        checkbox__curtir = document.getElementById("checkbox__curtir").removeAttribute("checked");
        //Diminuindo valor do like
        valor__curtir.innerText;
        valor__curtir = parseInt(valor__curtir);
        valor__curtir.value = valor__curtir - 1;
        valor__curtir.innerHTML = valor__curtir
    }else{
        //Mudando cor do ícone para verde
        btn__curtir.style.color = "#34B132";
        //Mudando cor do número de likes para verde
        valor__curtir.style.color = "#34B132";
        //Deixando checkbox checado
        checkbox__curtir = document.getElementById("checkbox__curtir");
        checkbox__curtir.setAttribute('checked', '');
        //Aumentando valor do like
        valor__curtir.innerText;
        valor__curtir = parseInt(valor__curtir);
        valor__curtir.value = valor__curtir + 1;
        valor__curtir.innerHTML = valor__curtir
    }
}