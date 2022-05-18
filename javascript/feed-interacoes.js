function curtir(){
    let curtir = document.getElementById("botaoCurtir");
    let classeElement = document.getElementsByClassName("fa-heart")
    
    if (classeElement = "fa-heart"){
        curtir.classList.remove("fa-regular");
        curtir.classList.add("fa-solid");
        curtir.style.color = "#34B132"
    }else{
        curtir.classList.remove("fa-solid");
        curtir.classList.add("fa-regular");
        curtir.style.color = "#5570FF"
    }
}

function comentar(){
    let comentar = document.getElementById("botaoComentar");
    comentar.classList.remove("fa-regular");
    comentar.classList.add("fa-solid");
    comentar.style.color = "#34B132"
}