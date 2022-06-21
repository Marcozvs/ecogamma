<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Início</title>
  <script src="../manipulacao/sweetalert.js"></script>
  <?php include './base/linksGlobais.php' ?>
</head>

<body>
<div class="fundo">
      <video autoplay="autoplay" loop="true" muted>
        <source src="../videos/fundo.mp4" type="video/mp4">
      </video>
</div>
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
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe0b0;</span>Contato</li>
                </a>
                <a href="comunidade.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d7;</span>Comunidade</li>
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
      <h1 class="titulo-sombra">Contato</h1>
      <p class="paragrafo-sombra p--subtitulo">Para entrar em contato com a gente preencha o formulário abaixo</p>
      <div class="container__formLogin">
        <form action="" class="container__formLogin__form">
          <label for="nome" id="label-icones-nome" class="label-icones">Nome</label>
          <div class="input-icones" id="input-icones-nome" onclick="inputIconesNome()">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo" id="input-icones-nome-span">&#xe7fd;</span>
            <input type="nome" placeholder="Insira seu nome..." maxlength="150" minlength="1" required id="nome" name="nome">
          </div>

          <label for="sobrenome" id="label-icones-sobrenome" class="label-icones">Sobrenome</label>
          <div class="input-icones" id="input-icones-sobrenome" onclick="inputIconesSobrenome()">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo" id="input-icones-sobrenome-span">&#xe7fd;</span>
            <input type="text" placeholder="Insira seu sobrenome..." maxlength="150" minlength="1" required id="sobrenome" name="sobrenome">
          </div>

          <label for="email" id="label-icones-email" class="label-icones">Email</label>
          <div class="input-icones" id="input-icones-email" onclick="inputIconesEmail()">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo" id="input-icones-email-span">&#xe158;</span>
            <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
          </div>

          <label for="telefone" id="label-icones-telefone" class="label-icones">Telefone / Celular</label>
          <div class="input-icones" id="input-icones-telefone" onclick="inputIconesTelefone()">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo" id="input-icones-telefone-span">&#xe0b0;</span>
            <input type="tel" placeholder="Insira seu número..." maxlength="150" minlength="1" required id="telefone" name="numero">
          </div>

          <label for="mensagem" id="label-icones-mensagem" class="label-icones">Mensagem</label>
          <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Escreva sua mensagem aqui..." onclick="inputIconesMensagem()"></textarea>
        
          <input type="submit" value="Enviar" class="botao__principal" id="botao-contato" onclick="contato()">

        </form>
      </div>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
  <script src="../manipulacao/inputIconesCadastro.js"></script>
  <script>
    function contato(){
      Swal.fire({
        icon: 'success',
        title: 'Contato enviado',
        showConfirmButton: false,
        timer: 1500
      })
    }
  </script>
</body>

</html>