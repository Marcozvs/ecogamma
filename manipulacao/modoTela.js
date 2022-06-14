//função modo noturno
function modoEscuro(){
    document.getElementById("html").style.backgroundColor = "#16181c";
    document.getElementById("header__interno").style.backgroundColor = "#16181c";
    document.getElementById("texto").style.backgroundColor = "#16181c";
    document.getElementById("upload").style.backgroundColor = "#16181c";
    document.getElementById("container__post").style.backgroundColor = "#16181c";
    document.getElementById("btn-compartilhar").style.backgroundColor = "#16181c";
    document.getElementById("btn-compartilhar").style.color = "#16181c";
    document.getElementById("menuLateral__InternoNoturno").style.backgroundColor = "#16181c";
    document.getElementById("botao__noite").style.display = "none";
    document.getElementById("botao__dia").style.display = "flex";
    document.getElementById("botao__dia").style.backgroundColor = "#16181c";
    document.getElementById("container__post__conteudo__data").style.color = "#fefefe";
    document.getElementById("container__post__conteudo__texto").style.color = "#fefefe";
}
function modoClaro(){
    document.getElementById("html").style.backgroundColor = "#fefefe";
    document.getElementById("header__interno").style.backgroundColor = "#fefefe";
    document.getElementById("texto").style.backgroundColor = "#fefefe";
    document.getElementById("upload").style.backgroundColor = "#fefefe";
    document.getElementById("botao__noite").style.display = "flex";
    document.getElementById("botao__dia").style.display = "none";
    document.getElementById("container__post__conteudo__data").style.color = "#111111";
    document.getElementById("container__post__conteudo__texto").style.color = "#111111";
    document.getElementById("container__post").style.backgroundColor = "#fefefe";
    document.getElementById("btn-compartilhar").style.color = "#fefefe";
    document.getElementById("btn-compartilhar").style.backgroundColor = "#fefefe";
    document.getElementById("menuLateral__InternoNoturno").style.backgroundColor = "#fefefe";
}