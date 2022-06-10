//função modo noturno
function modoNoite(){
    document.getElementById("html").style.backgroundColor = "#111111";
    document.getElementById("header__interno").style.backgroundColor = "#111111";
    document.getElementById("texto").style.backgroundColor = "#111111";
    document.getElementById("upload").style.backgroundColor = "#111111";
    document.getElementById("menuLateral__InternoNoturno").style.backgroundColor = "#111111";
    document.getElementById("botao__noite").style.display = "none";
    document.getElementById("botao__dia").style.display = "flex";
    document.getElementById("container__post__conteudo__data").style.color = "#fefefe";
    document.getElementById("container__post__conteudo__texto").style.color = "#fefefe";
}
function modoDia(){
    document.getElementById("html").style.backgroundColor = "#fefefe";
    document.getElementById("header__interno").style.backgroundColor = "#fefefe";
    document.getElementById("botao__noite").style.display = "flex";
    document.getElementById("botao__dia").style.display = "none";
}