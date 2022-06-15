function modoEscuro(){
    //Definindo fundo da página em modo escuro
    const html = document.querySelectorAll("html");
    for (let i = 0; i < html.length; i++) {
      html[i].style.backgroundColor = "#16181c";
    }
    //Definindo fundo do cabeçalho em modo escuro
    const header = document.querySelectorAll("header");
    for (let i = 0; i < header.length; i++) {
      header[i].style.backgroundColor = "#16181c";
    }
    //Definindo fundo do menu lateral em modo escuro
    const menuLateral = document.querySelectorAll("#menuLateral__Interno__conteudo");
    for (let i = 0; i < menuLateral.length; i++) {
      menuLateral[i].style.backgroundColor = "#16181c";
    }
    //Definindo cor do texto dos páragrafos como branco e aplicando excessões.
    const paragrafo = document.querySelectorAll("p");
    for (let i = 0; i < paragrafo.length; i++) {
      paragrafo[i].style.color = "#fefefe";
    }
    //Definindo fundo escuro no botão modo escuro
    const botaoEscuro = document.querySelectorAll("#botao__noite");
    for (let i = 0; i < botaoEscuro.length; i++) {
        botaoEscuro[i].style.backgroundColor = "#16181c";
    }
    //Excessões:
        //Parágrafo do cargo do perfil tem que permanecer verde.
        const paragrafo__cargo = document.querySelectorAll(".cargo__perfil");
        for (let i = 0; i < paragrafo__cargo.length; i++) {
        paragrafo__cargo[i].style.color = "#34B132";
        }
        //Tirando fundo branco do textarea da sessão postagem.
        const textareaPostagem = document.querySelectorAll("#texto");
        for (let i = 0; i < textareaPostagem.length; i++) {
        textareaPostagem[i].style.backgroundColor = "#16181c";
        }
        //Tirando fundo branco do input para inserir arquivos.
        const labelBotao = document.querySelectorAll(".label-botao");
        for (let i = 0; i < labelBotao.length; i++) {
        labelBotao[i].style.backgroundColor = "#16181c";
        }
        //Tirando fundo branco dos posts.
        const post = document.querySelectorAll("#post");
        for (let i = 0; i < post.length; i++) {
        post[i].style.backgroundColor = "#16181c";
        }
        //Escondendo botão compartilhar
        const botaoCompartilhar = document.querySelectorAll("#btn-compartilhar");
        for (let i = 0; i < botaoCompartilhar.length; i++) {
        botaoCompartilhar[i].style.backgroundColor = "#16181c";
        botaoCompartilhar[i].style.color = "#16181c";
        }
}