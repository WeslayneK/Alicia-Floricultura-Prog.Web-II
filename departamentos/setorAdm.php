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
    <title>Setor Administrativo - Alícia Floricultura</title>
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
    <img class="conteudo-principal2-imagem" src="imagens/setorAdm.svg" alt="Imagem ilustrativa do Setor Administrativo">
      <div class="conteudo-principal2-escrito">
        <h1 class="conteudo-principal2-escrito-titulo">Setor Administrativo</span> </h1>
        <p class="conteudo-secundario2-paragrafo">O Setor Administrativo responde ao planejamento estratégico da empresa, <br> o que inclui a 
            atribuição de tarefas e, também, a análise estratégica de <br> dados. 
            <br> Com isso, torna-se uma área fundamental para a tomada de decisão <br> focada no crescimento sustentável e coletivo da organização.
            <br>Não à toa, é o setor que mais se assemelha às funções do coração: ele bombeia <br> todas as tarefas de maneira coordenada para que os objetivos sejam atingidos <br> continuamente.</p>
        </p>
      </div>
    </section>

    <!--Rodapé básico da página-->
    <footer class="rodape">
        <img class="rodape-imagem" src="imagens/logo.png" alt="Gado Forte">
        <h3>Alícia Floricultura</h3>
    </footer>
</body>
</html>