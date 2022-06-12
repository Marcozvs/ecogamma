
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
        chat.innerHTML += `<p class="robo">Olá, de qual informação você precisa? Digite o número da informação que precisa:<br>1. Como me cadastro no site?<br>2. Quais os meios de doação?<br>3. Posso usar o site para prover a minha empresa?<br>4. Quem está por trás do Ecogamma?<br> 5. Esqueci a minha senha, e agora?<br><br>Lembre-se de que é possível mudar o tema da página digitando <strong>escuro</strong> ou <strong>claro</strong> </p>`;
    } else if (mensagem == "1") {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">Para se cadastrar no site e efetivar a sua conta é necessário realizar o cadastro, a página de cadastro pode ser acessada <a href='./cadastro.php' style='text-decoration:none;color: white; font-weight:bolder;'>clicando aqui</a>.</p>`;
    } else if (mensagem == "2") {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">Aceitamos cartões de crédito, débito, pix, paypal e pagamento via boleto bancário.</p>`;
    } else if (mensagem == "3") {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">Para se tornar um parceiro oficial de nosso site e evitar punições por divulgações não autorizadas, fale com a nossa equipe usando o nosso email empresarial!</p>`;
    } else if (mensagem == "4") {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">O Ecogamma foi feito para os amantes de ecossistemas e ciências naturais, desenvolvido pela nossa larga equipe de profissionais especializados em programação.</p>`;
    } else if (mensagem == "5") {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">Não se desespere, há uma página justamente para a resolução deste problema <a href='#' style='text-decoration:none; font-weight:bolder; color: white;'>clique aqui</a> para ir direto a ela.</p>`;
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
    } else if (mensagem == "Obrigado" || mensagem == "obrigado" || mensagem == "Obrigado Ecobot" || mensagem == "obrigado pela ajuda" || mensagem == "Obrigado pela ajuda") {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">Por nada, aproveite o Ecogamma e o amor, pois os dois são sensacionais.</p>`;
    }
        else {
        chat.innerHTML += `<p class="usuario">${mensagem}</p>`;
        chat.innerHTML += `<p class="robo">Desculpe, não consegui entender, isso não foi nada natural! <br> :(</p>`;
    }

}