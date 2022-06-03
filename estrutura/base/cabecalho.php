<?php 
echo
"
<header class=\"cabecalho\">
                <div class=\"cabecalho__logo\">
                    <img src=\"../imagens/logo.png\" alt=\"Logo Ecogamma\">
                </div>
                <div class=\"cabecalho__pesquisa\">
                    <form action=\"#\" class=\"cabecalho__pesquisa__formulario\">
                        <input type=\"search\" class=\"cabecalho__pesquisa__formulario__search\" placeholder=\"Pesquise no Ecogamma\" maxlength=\"30\" minlength=\"1\">
                        <input type=\"submit\" class=\"cabecalho__pesquisa__formulario__submit\">
                    </form>
                </div>
                <div class=\"cabecalho__navegacao\">
                    <ul>
                        <a href=\"./perfil.php\">
                            <li>
                                <span class=\"material-symbols-outlined\">account_circle</span>
                            </li>
                        </a>
                        <a href=\"./chat.php\">
                            <li>
                                <span class=\"material-symbols-outlined\">chat</span>
                            </li>
                        </a>
                        <a>
                            <li>
                                <span class=\"material-symbols-outlined\">chat</span>
                            </li>
                        </a>
                        <a onclick=\"menuLateralOpen()\" class=\"menubar\">
                            <li>
                                <span class=\"material-symbols-outlined\">logout</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </header>
"

?>