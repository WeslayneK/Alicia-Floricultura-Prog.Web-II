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
   <title>Setor Operacional - Alícia Floricultura</title>
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
    <img class="conteudo-principal2-imagem" src="imagens/setorOpe.svg" alt="Imagem ilustrativa do Setor Operacional">
      <div class="conteudo-principal2-escrito">
        <h1 class="conteudo-principal2-escrito-titulo">Setor Operacional</h1>
        <p class="conteudo-secundario2-paragrafo">Para muitas organizações — em especial, no setor industrial —, 
        o setor operacional é uma <br> das principais áreas de uma empresa. Afinal, é 
        o departamento que cria forma e volume <br> para organizações que comercializam produtos para os clientes.
        Isso engloba também <br> as gestões de estoque, logística e maquinário. <br><br> São, portanto, muitas vertentes que demandam 
        profissionais qualificados para que o <br> fluxo de trabalho transcorra sem imprevistos.
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