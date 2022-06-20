/*
Está função deixa os input ícones com estilo diferente quando o usuário clica para inserir
o dado
*/

//Ativando input do email

function inputIconesEmail(){
    //Selecionando elementos do email no formulário do login
    const labelIconesEmail = document.getElementById("label-icones-email");
    const inputIconesEmail = document.getElementById("input-icones-email");
    const inputIconesEmailSpan = document.getElementById("input-icones-email-span");
    const inputIconesEmailLetra = document.getElementById("email");
    //Selecionando elementos da senha no formulário do login
    const labelIconesSenha = document.getElementById("label-icones-senha");
    const inputIconesSenha = document.getElementById("input-icones-senha");
    const inputIconesSenhaSpan = document.getElementById("input-icones-senha-span");
    const inputIconesSenhaLetra = document.getElementById("senha");
    //Deixando os elementos do input email verdes e do input senha azul
    
    labelIconesEmail.style.color = "#34B132";
    inputIconesEmail.style.border = "2px solid #34B132";
    inputIconesEmailSpan.style.color = "#34B132";
    inputIconesEmailLetra.style.color = "#34B132";

    labelIconesSenha.style.color = "#5570FF";
    inputIconesSenha.style.border = "2px solid #5570FF";
    inputIconesSenhaSpan.style.color = "#5570FF";
    inputIconesSenhaLetra.style.color = "#5570FF";
}

//Ativando input da senha

function inputIconesSenha(){
    //Selecionando elementos da senha no formulário do login
    const labelIconesSenha = document.getElementById("label-icones-senha");
    const inputIconesSenha = document.getElementById("input-icones-senha");
    const inputIconesSenhaSpan = document.getElementById("input-icones-senha-span");
    const inputIconesSenhaLetra = document.getElementById("senha");
    //Selecionando elementos do email no formulário do login
    const labelIconesEmail = document.getElementById("label-icones-email");
    const inputIconesEmail = document.getElementById("input-icones-email");
    const inputIconesEmailSpan = document.getElementById("input-icones-email-span");
    const inputIconesEmailLetra = document.getElementById("email");

    //Deixando os elementos do input senha verdes e do input email azul

    labelIconesSenha.style.color = "#34B132";
    inputIconesSenha.style.border = "2px solid #34B132";
    inputIconesSenhaSpan.style.color = "#34B132";
    inputIconesSenhaLetra.style.color = "#34B132";
    
    labelIconesEmail.style.color = "#5570FF";
    inputIconesEmail.style.border = "2px solid #5570FF";
    inputIconesEmailSpan.style.color = "#5570FF";
    inputIconesEmailLetra.style.color = "#5570FF";
}