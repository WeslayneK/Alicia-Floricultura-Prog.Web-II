<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Weslayne Kalline da Silva">
    <meta name="keywords" content="Floricultura">
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="icon" type="imagem/ico" href="imagens/logo-icon.ico" />
   <title>Setor Financeiro - Alícia Floricultura</title>
</head>

<body>

    <!--Cabeçalho da página-->
    <header class="cabecalho">  
        <a href="home2.php"><img class="img-seta" src="imagens/seta.svg" alt=""></a>
        <img class="img-icon" src="imagens/logo.png" alt="Logotipo Alícia Floricultura">
        <h3 class="title">Alícia Floricultura</h3>
        <div class="datetime">
          <?php
            date_default_timezone_set('America/Porto_Velho');
            $data_de_hoje = date("d/m/Y h:i:s");
            echo $data_de_hoje;
          ?>
        </div>        
    </header>

    <!--Conteúdo da página junto com a imagem que ilustra o setor-->
    <section class="conteudo-principal2">
      <div class="conteudo-principal2-escrito">
        <h1 class="conteudo-principal2-escrito-titulo">Setor Financeiro</h1>
        <p class="conteudo-secundario2-paragrafo">O financeiro é uma das principais áreas de uma empresa — e, talvez, uma que tem <br> as 
        maiores cobranças, literalmente. 
        Geralmente, é um setor complementar ou acoplado <br> ao administrativo, já que todas as decisões estão profundamente alinhadas à
        necessidade <br> de capital para o investimento.
        Além disso, o financeiro cuida da gestão do fluxo de caixa <br> e da saúde financeira da empresa. Entre outras atividades, como:</p>
        <li class="text-marcadores">Gestão de recursos e contas;</li>
        <li class="text-marcadores">Controle da tesouraria</li>
        <li class="text-marcadores">Investimentos e riscos;</li>
        <li class="text-marcadores">Gestão de contas e impostos;</li>
        <li class="text-marcadores">Pagamentos;</li>
        <li class="text-marcadores">Planejamento financeiro;</li>
        <p class="conteudo-secundario2-paragrafo">Vale destacar ainda que a apresentação dos resultados está por conta desse setor. <br> 
        O que apenas reforça a importância em contar 
        com uma equipe altamente qualificada <br> para que o seu empreendimento não conviva com imprevistos na área — o que pode <br> impactar, 
        diretamente, todas as outras áreas de uma empresa.</p>
      </div>
      <img class="conteudo-principal2-imagem" src="imagens/setorFin.svg" alt="Imagem ilustrativa do Setor Financeiro">
    </section>

    <!--Rodapé básico da página-->
    <footer class="rodape">
        <img class="rodape-imagem" src="imagens/logo.png" alt="Gado Forte">
        <h3>Alícia Floricultura</h3>
    </footer>
</body>
</html>