function modoEscuro(){
    //Definindo fundo da página em modo escuro
    const html = document.querySelector("html");
      html.style.backgroundColor = "#16181c";
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
    const botaoEscuro = document.querySelector("#botao__noite");
    botaoEscuro.style.backgroundColor = "#16181c";
    //Substituindo botão escuro pelo claro
    botaoEscuro.style.display = "none";
    const botaoClaro = document.querySelector("#botao__dia");
    botaoClaro.style.display = "flex";
    botaoClaro.style.backgroundColor = "#16181c";
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
        //Escondendo número no botão do input
          const botaoCurtir = document.querySelectorAll("#btn__funcao__curtir");
          for (let i = 0; i < botaoCurtir.length; i++) {
            botaoCurtir[i].style.color = "#16181c";
          }
        //Escondendo botão salvar
          const botaoSalvar = document.querySelectorAll("#btn-salvar");
          for (let i = 0; i < botaoSalvar.length; i++) {
            botaoSalvar[i].style.backgroundColor = "#16181c";
          }
        //Deixando cartao escuro
          const cartao = document.querySelectorAll(".container__post");
          for (let i = 0; i < cartao.length; i++) {
            cartao[i].style.backgroundColor = "#16181c";
          }
}

function modoClaro(){
  //Definindo fundo da página em modo claro
    const html = document.querySelector("html");
    html.style.backgroundColor = "#fefefe";
  //Definindo fundo do cabeçalho em modo claro
    const header = document.querySelectorAll("header");
    for (let i = 0; i < header.length; i++) {
      header[i].style.backgroundColor = "#fefefe";
    }
  //Definindo fundo do menu lateral em modo claro
    const menuLateral = document.querySelectorAll("#menuLateral__Interno__conteudo");
    for (let i = 0; i < menuLateral.length; i++) {
      menuLateral[i].style.backgroundColor = "#fefefe";
    }
  //Definindo cor do texto dos páragrafos como preto e aplicando excessões.
  const paragrafo = document.querySelectorAll("p");
  for (let i = 0; i < paragrafo.length; i++) {
    paragrafo[i].style.color = "#111111";
  }
  //Definindo fundo claro no botão modo claro
    const botaoEscuro = document.querySelector("#botao__noite");
    botaoEscuro.style.backgroundColor = "#fefefe";
  //Substituindo botão claro pelo escuro
    botaoEscuro.style.display = "flex";
    botaoEscuro.style.backgroundColor = "#fefefe";
    const botaoClaro = document.querySelector("#botao__dia");
    botaoClaro.style.display = "none";
  //Excessões:
      //Parágrafo do cargo do perfil tem que permanecer verde.
        const paragrafo__cargo = document.querySelectorAll(".cargo__perfil");
        for (let i = 0; i < paragrafo__cargo.length; i++) {
        paragrafo__cargo[i].style.color = "#34B132";
        }
      //Tirando fundo escuro do textarea da sessão postagem.
        const textareaPostagem = document.querySelectorAll("#texto");
        for (let i = 0; i < textareaPostagem.length; i++) {
        textareaPostagem[i].style.backgroundColor = "#fefefe";
        }
      //Tirando fundo escuro do input para inserir arquivos.
        const labelBotao = document.querySelectorAll(".label-botao");
        for (let i = 0; i < labelBotao.length; i++) {
        labelBotao[i].style.backgroundColor = "#fefefe";
        }
      //Tirando fundo branco dos posts.
        const post = document.querySelectorAll("#post");
        for (let i = 0; i < post.length; i++) {
        post[i].style.backgroundColor = "#fefefe";
        }
      //Escondendo botão compartilhar
        const botaoCompartilhar = document.querySelectorAll("#btn-compartilhar");
        for (let i = 0; i < botaoCompartilhar.length; i++) {
        botaoCompartilhar[i].style.backgroundColor = "#fefefe";
        botaoCompartilhar[i].style.color = "#fefefe";
        }
      //Escondendo número no botão do input
        const botaoCurtir = document.querySelectorAll("#btn__funcao__curtir");
        for (let i = 0; i < botaoCurtir.length; i++) {
          botaoCurtir[i].style.color = "#fefefe";
        }
      //Escondendo botão salvar
        const botaoSalvar = document.querySelectorAll("#btn-salvar");
        for (let i = 0; i < botaoSalvar.length; i++) {
          botaoSalvar[i].style.backgroundColor = "#fefefe";
        }
      //Deixando valor de curtidas em azul
        const valorCurtir = document.querySelector("#valor__curtir");
        valorCurtir.style.color = "#5570FF";
      //Deixando valor de comentários em azul
        const valorComentar = document.querySelector("#valor__comentar");
        valorComentar.style.color = "#5570FF";
      //Deixando cartao claro
        const cartao = document.querySelectorAll(".container__post");
        for (let i = 0; i < cartao.length; i++) {
          cartao[i].style.backgroundColor = "#fefefe";
        }
}