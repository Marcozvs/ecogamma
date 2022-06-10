<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Início</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
<header class="header">
    <div class="container">
      <div class="container__logo">
        <a href="login.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
      </div>
    <div id="container__menu" onclick="menuLateralInternoOpen()">
      <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
    </div>
    </div>
  </header>
  <section id="menuLateral__interno">
        <div class="container">
            <div class="container__menu" onclick="menuLateralInternoClose()">
                <span class="material-symbols-outlined container__menu__icone span--verde">&#xe5d2;</span>
            </div>
            <ul class="container__lista">
                <a href="login.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone icone-alternativo container__lista__item__icone-ativo">&#xea77;</span>Login</li>
                </a>
                <a href="cadastro.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe145;</span>Cadastro</li>
                </a>
                <a href="contato.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe0b0;</span>Contato</li>
                </a>
                <a href="comunidade.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xf8d7;</span>Comunidade</li>
                </a>
                <a href="sobreNos.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d8;</span>Sobre Nós</li>
                </a>
                <a href="recuperarSenha.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe898;</span>Recuperar a Senha</li>
                </a>
            </ul>
        </div>
    </section>
    <main>
        <div class="container">
            <h1>Comunidade</h1>
            <p>Nossa comunidade é impulsionada por pessoas motivadas em preservar o meio ambiente</p>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/marcos.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Marcos Vinícius da Silva</p>
                        <p class="container__cartao__dados__cargo">Engenheiro da Computação</p>
                    </div>
                </div>
                <p class="container__cartao__texto">Claro que é importante debatermos assuntos como consumo de energia, entrentanto devemos também pensar na poluição gerada pelos materiais dos smartphones e outros dispositivos que são descartados diariamente!</p>
            </div>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/leandro.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Leandro Silva de Carvalho</p>
                        <p class="container__cartao__dados__cargo">Engenheiro da Software</p>
                    </div>
                </div>
                <p class="container__cartao__texto">Hoje validamos um projeto de melhoria no sistema de energia em alguns setores da empresa graças ao nosso novo software #TECHLINS #MEIO AMBIENTE</p>
            </div>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/Mandanga.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Mandanga Sebastião</p>
                        <p class="container__cartao__dados__cargo">Jornalista Esportivo</p>
                    </div>
                </div>
                <p class="container__cartao__texto">No Estádio Nilton Santos, do Botafogo, iniciou uma parceria com a empresa MeuCopo Eco para reduzir a quantidade de copos descartados no estádio</p>
            </div>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/Rafael.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Rafael Lopes</p>
                        <p class="container__cartao__dados__cargo">Contador</p>
                    </div>
                </div>
                <p class="container__cartao__texto">Estamos implantando os 5 R's para reduzir o consumo na empresa, junto com a equipe de logística nossos galpões estão reutilizando as caixas de papelão e paletes ao invés de descartá-los</p>
                <div  class="container__cartao__imagem">
                    <img src="../imagens/rafaelEmpresa.jpg" alt="Foto do publicação">
                </div>
            </div>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/Vanessa.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Vanessa</p>
                        <p class="container__cartao__dados__cargo">Doutora em Ciência da Computação</p>
                    </div>
                </div>
                <p class="container__cartao__texto">A educação ambiental é o primeiro passo que precisamos dar, sem ela não podemos ter certeza de que o próximo entende o que está e jogo #LutaPelaEducaçãoAmbiental</p>
            </div>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/samyra.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Samyra</p>
                        <p class="container__cartao__dados__cargo">Analísta de Sistemas</p>
                    </div>
                </div>
                <p class="container__cartao__texto">A mais pura verdade</p>
                <div  class="container__cartao__imagem">
                    <img src="../imagens/tirinha.jpg" alt="Foto do publicação">
                </div>
            </div>
            <div class="container__cartao">
                <div class="container__cartao__dados">
                    <div class="container__cartao__dados__foto">
                        <img src="../imagens/richard.jpg" alt="foto de perfil">
                    </div>
                    <div>
                        <p class="container__cartao__dados__nome">Richard</p>
                        <p class="container__cartao__dados__cargo">Técnico em Informática para Internet</p>
                    </div>
                </div>
                <p class="container__cartao__texto">O governo devia dar mais atenção a floresta amazônica :/</p>
            </div>
        </div>
    </main>
    <footer class="footer-comunidade">
    <h1>Contato</h1>
    <ul class="footer__lista">
      <li class="footer__lista__item">
        <a href="malito:ecogamma@gmail.com"><span class="material-symbols-outlined container__menu__icone span">&#xe158;</span>ecogamma@gmail.com</a>
      </li>
      <hr>
      <li class="footer__lista__item">
        <a href="tel:(00)000000000"><span class="material-symbols-outlined container__menu__icone span">&#xe61d;</span>(00)000000000</a>
      </li>
      <hr>
    </ul>
    <div class="footer__copyright">
      <span class="material-symbols-outlined container__menu__icone span">&#xe90c;</span>
      <p>Copyright - Ecogamma 2022</p>
    </div>
</footer>
    <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>