//Função quando clicar no botão fazer uma interação
function botao(){
    const botao = document.querySelectorAll(".botao__principal");
    for (let i = 0; i < botao.length; i++) {
        botao[i].style.backgroundColor = "#34B132";
      }
}