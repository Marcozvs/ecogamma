<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Início</title>
  <?php include './base/linksGlobais.php' ?>
</head>
<?php
include './administracao/sessao.php';
if ($_SESSION['logado'] == 1) {
        include 'jaLogado.php';
        die();
    };
?>

<body>
<?php 
  //alerta em caso de email já cadastrado
  $message = "O email informado já está em uso!";
  $message2 = "As senhas informadas são diferentes!";
if (isset($_GET["msg"]) && $_GET["msg"] == 'email') {
  echo "<script type='text/javascript'>alert('$message');</script>";
} elseif (isset($_GET["msg"]) && $_GET["msg"] == 'senha') { //alerta se as senhas são diferentes (confirm password)
  echo "<script type='text/javascript'>alert('$message2');</script>";
}
  ?>
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
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe145;</span>Cadastro</li>
                </a>
                <a href="contato.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe0b0;</span>Contato</li>
                </a>
                <a href="comunidade.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d7;</span>Comunidade</li>
                </a>
                <a href="sobreNos.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d8;</span>Sobre Nós</li>
                </a>
            </ul>
        </div>
    </section>
    <main>
    <div class="container">
      <h1>Cadastro</h1>
      <p>Para se cadastrar preencha o formulário abaixo</p>
      <div class="container__formLogin">
        <form action="./cadastroProcessa.php" class="container__formLogin__form" method="POST">

          <label for="nome">Nome</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe7fd;</span>
            <input type="nome" placeholder="Insira seu nome..." maxlength="150" minlength="1" required id="nome" name="nome">
          </div>

          <label for="sobrenome">Sobrenome</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe7fd;</span>
            <input type="text" placeholder="Insira seu sobrenome..." maxlength="150" minlength="1" required id="sobrenome" name="sobrenome">
          </div>

          <label for="email">Email</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe158;</span>
            <input type="email" placeholder="Insira seu email..." maxlength="150" minlength="1" required id="email" name="email">
          </div>

          <label for="telefone">Telefone / Celular</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe0b0;</span>
            <input type="tel" placeholder="Insira seu número..." maxlength="150" minlength="1" required id="celular" name="celular">
          </div>

          <label for="senha">Senha</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe63f;</span>
            <input type="password" placeholder="Insira sua senha..." maxlength="80" minlength="1" required id="senha" name="senha">
          </div>
          
          <label for="senha">Confirmação da senha</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe63f;</span>
            <input type="password" placeholder="Repita sua senha..." maxlength="80" minlength="1" required id="senha" name="senha">
          </div>
          
          <label for="nascimento">Data de Nascimento</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe935;</span>
            <input type="date" required id="dataN" name="dataN">
          </div>

          <label for="genero">Genero</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe63d;</span>
            <select name="genero" id="genero" name="genero">
              <option value="masculinoCisgênero">Masculino</option>
              <option value="transgenero">Feminino</option>
              <option value="naoBinario">Transgênero</option>
              <option value="naoBinario">Não Binário</option>
            </select>
          </div>

          <label for="estado">Estado</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe2db;</span>
            <select name="estado" id="estado">
            <option value="estado">Selecione o Estado</option>
            <option value="ac">Acre</option>
            <option value="al">Alagoas</option>
            <option value="am">Amazonas</option>
            <option value="ap">Amapá</option>
            <option value="ba">Bahia</option>
            <option value="ce">Ceará</option>
            <option value="df">Distrito Federal</option>
            <option value="es">Espírito Santo</option>
            <option value="go">Goiás</option>
            <option value="ma">Maranhão</option>
            <option value="mt">Mato Grosso</option>
            <option value="ms">Mato Grosso do Sul</option>
            <option value="mg">Minas Gerais</option>
            <option value="pa">Pará</option>
            <option value="pb">Paraíba</option>
            <option value="pr">Paraná</option>
            <option value="pe">Pernambuco</option>
            <option value="pi">Piauí</option>
            <option value="rj">Rio de Janeiro</option>
            <option value="rn">Rio Grande do Norte</option>
            <option value="ro">Rondônia</option>
            <option value="rs">Rio Grande do Sul</option>
            <option value="rr">Roraima</option>
            <option value="sc">Santa Catarina</option>
            <option value="se">Sergipe</option>
            <option value="sp">São Paulo</option>
            <option value="to">Tocantins</option>
          </select>
          </div>

          <label for="cidade">Cidade</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe55c;</span>
            <input type="address" placeholder="Insira sua cidade..." maxlength="100" minlength="1" required id="cidade" name="cidade">
          </div>

          <label for="profissao">Profissao</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe8f9;</span>
            <input type="text" placeholder="Insira seu profissao..." maxlength="150" minlength="1" required id="profissao" name="profissao">
          </div>

          <p>Observação: Coloque estudante caso seja.</p>

          <input type="submit" value="Enviar" class="botao__principal">

        </form>
      </div>
    </div>
  </main>
  <footer class="footer-cadastro">
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