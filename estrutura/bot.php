<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Bot</title>
  <?php include './base/linksGlobais.php' ?>
</head>

<body>
  <?php
  include './administracao/sessao.php';
  if ($_SESSION['logado'] == 0) {
    include 'naoLogado.php';
    die();
  };
  ?>
  <header class="header__interno">
    <div class="container">
        <div class="container__logo">
            <a href="feed.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
        </div>
        <nav class="container__nav">
            <a href="perfil.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
            </a>
            <a href="chat.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
            </a>
            <a href="logout.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
            </a>
        </nav>
        <div id="container__menu" onclick="menuLateralInternoOpen()">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
        </div>
    </div>
</header>
  <section id="menuLateral__interno">
        <div class="container">
            <div class="container__menu" onclick="menuLateralInternoClose()">
                <span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe5d2;</span>
            </div>
            <ul class="container__lista">
                <a href="./feed.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone icone-alternativo container__lista__item__icone">&#xe761;</span>Feed</li>
                </a>
                <a href="./notificacao.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe7f4;</span>Notificação</li>
                </a>
                <a href="./salvos.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe865;</span>Salvos</li>
                </a>
                <a href="./evento.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe878;</span>Eventos</li>
                </a>
                <a href="./noticia.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xeb81;</span>Notícias</li>
                </a>
                <a href="./dica.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe0f0;</span>Dicas</li>
                </a>
                <a href="./pontosColeta.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe55f;</span>Pontos de Coleta</li>
                </a>
                <a href="./configuracoes.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe8b8;</span>Configurações</li>
                </a>
                <a href="./ecotrends.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe80e;</span>Ecotrends</li>
                </a>
                <a href="./amigos.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d9;</span>Amigos</li>
                </a>
                <a href="./doacao.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xea70;</span>Doação</li>
                </a>
                <a href="./bot.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo icone-alternativo">&#xf06c;</span>Bot de Ajuda</li>
                </a>
            </ul>
        </div>
    </section>
  <main>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(235, 186, 149);
            background: radial-gradient(circle, rgba(235, 186, 149, 1) 0%, rgba(242, 155, 247, 1) 100%);
        }

        #logo {
            width: 250px;
            height: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            margin-bottom: 10px;

        }

        #chat {
            border: 6px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-radius: 17px;
            background-color: rgb(165, 88, 189);
            margin: 0px 10% 0px 10%;
            padding: 1.2%;
            text-shadow: rgb(0, 0, 0) 0.1em 0.1em 0.12em;
        }

        #escrever {
            border-style: none;
            border-radius: 20px;
            width: 65vw;
            margin: 10px 10% 0px 10%;
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 10px;
            font-size: 20px;
            vertical-align: middle;
            background-color: rgb(255, 255, 255);
            color: rgb(36, 36, 36);
            font-family: sans-serif;
            outline: none;
        }

        #escrever::placeholder {
            color:rgba(51, 0, 66, 0.616)
        }

        #enviar {
            border-style: none;
            border: none;
            padding: none;
            color: none;
            background-color: transparent;
            opacity: 0%;
        }

        .usuario {
            border-radius: 15px 0px 15px 15px;
            border-style: solid;
            background-color: rgb(166, 99, 228);
            color: white;
            margin: 10px 15px 5px 120px;
            font-size: larger;
            font-family: sans-serif;
            padding: 6px;
        }

        .robo {
            border-radius: 0px 15px 15px 15px;
            border-style: solid;
            background-color: rgb(112, 18, 199);
            color: white;
            margin: 10px 120px 5px 15px;
            font-size: larger;
            font-family: sans-serif;
            padding: 6px;
        }
    </style>
</head>

<body>
    <div id="chat">
        <p class="robo">Prazer em conhecê-lo, meu nome é <strong>Lovebot</strong>! Sou o responsável por ajudar os clientes a se encontrarem dentro do nosso website de forma amigável e intuitiva! ♥</p>
        <p class="robo">Tire suas dúvidas comigo! Tente digitar <strong>olá</strong> no meu chat!</p>
    </div>
    <input type="text" name="" id="escrever" autocomplete="off"
        placeholder="Dica: Pressione ENTER para enviar uma mensagem já escrita">
    <button type="button" onclick="conversar()" id="enviar">Enviar</button>
    <script>
        // essa parte faz ser possível o envio de mensagens utilizando o enter no input sem precisar clicar no botão
        var mensagem = document.getElementById("escrever");
        mensagem.addEventListener("keyup", function (event) {
            // O número 13 é o enter no teclado
            if (event.keyCode === 13) {
                // cancela a ação padrão se preciso
                event.preventDefault();
                // faz o botão funcionar sem precisar clicar
                document.getElementById("enviar").click();
                mensagem.value = ""
            }
        });

        function conversar() {
            var chat = document.getElementById("chat");
            var mensagem = document.getElementById("escrever").value;
            if (mensagem == "") {
                alert("Opa! Tente escrever algo na mensagem!");
            } else if (mensagem == "olá" || mensagem == "Olá" || mensagem == "oi" || mensagem == "Oi" || mensagem == "ajuda") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Olá, de qual informação você precisa? Digite o número da informação que precisa:<br>1. Como me cadastro no site?<br>2. Quais meios de pagamento a Loveflix aceita?<br>3. Posso usar a Loveflix mesmo sem namorar?<br>4. Quem está por trás da Loveflix?<br> 5. Esqueci a minha senha, e agora?<br><br>Lembre-se de que é possível mudar o tema da página digitando <strong>escuro</strong> ou <strong>claro</strong> </p>`;
            } else if (mensagem == "1") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Para se cadastrar no site e efetivar a sua conta é necessário realizar o pagamento, a página de cadastro pode ser acessada <a href='#' style='text-decoration:none;color: white; font-weight:bolder;'>clicando aqui</a>.</p>`;
            } else if (mensagem == "2") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Aceitamos cartões de crédito, débito, pix, paypal e pagamento via boleto bancário.</p>`;
            } else if (mensagem == "3") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Contamos com um catálogo diversificado com diversos filmes que satisfazem à todo o tipo de público!</p>`;
            } else if (mensagem == "4") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">O site foi feito inicialmente como um projeto para a ETEC Parque Belém, realizado por alunos do curso de Informática para Internet (Infonet).</p>`;
            } else if (mensagem == "5") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Não se desespere, há uma página justamente para a resolução deste problema <a href='#' style='text-decoration:none; font-weight:bolder; color: white;'>clique aqui</a> para ir direto para ela.</p>`;
            } else if (mensagem == "escuro" || mensagem == "dark" || mensagem == "apagar" || mensagem == "escurecer" || mensagem == "Escuro") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Só um momento, irei deixar tudo escurinho!</p>`;
                function apagar() {
                    document.body.style.backgroundColor = "rgb(0,0,0)";
                    document.body.style.background = "radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(145,58,150,1) 100%)"
                    document.getElementById("chat").style.backgroundColor = 'rgb(51, 0, 66)';
                }
                apagar()
                chat.innerHTML += `<p class="robo">Prontinho.</p>`;
            } else if (mensagem == "claro" || mensagem == "light" || mensagem == "acender" || mensagem == "luz" || mensagem == "Claro") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Muito escuro né? irei acender as luzes!</p>`;
                function acender() {
                    document.body.style.backgroundColor = "rgb(235, 186, 149)";
                    document.body.style.background = "radial-gradient(circle, rgba(235, 186, 149, 1) 0%, rgba(242, 155, 247, 1) 100%)";
                    document.getElementById("chat").style.backgroundColor = 'rgb(165, 88, 189)';
                }
                acender()
                chat.innerHTML += `<p class="robo">Prontinho.</p>`;
            } else if (mensagem == "Tchau" || mensagem == "tchau" || mensagem == "Adeus" || mensagem == "adeus" || mensagem == "até mais") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Até mais, pode contar comigo sempre que precisar.</p>`;
            } else if (mensagem == "Obrigado" || mensagem == "obrigado" || mensagem == "Obrigado lovebot" || mensagem == "obrigado pela ajuda" || mensagem == "Obrigado pela ajuda") {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Por nada, aproveite a Loveflix e o amor, pois os dois são sensacionais.</p>`;
            }
             else {
                chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
                chat.innerHTML += `<p class="robo">Desculpe, não consegui entender :(</p>`;
            }

        }
    </script>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>