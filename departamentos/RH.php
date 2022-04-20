<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Weslayne Kalline da Silva">
    <meta name="keywords" content="Floricultura">
    <link rel="stylesheet" href="CSS/style2.css">
    <title>Recursos Humanos - Alícia Floricultura</title>
    <link rel="icon" type="imagem/ico" href="imagens/logo-icon.ico" />

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
    <img class="conteudo-principal2-imagem" src="imagens/RH.svg" alt="Imagem ilustrativa do Setor Recursos Humanos">
      <div class="conteudo-principal2-escrito">
        <h1 class="conteudo-principal2-escrito-titulo">Recursos Humanos</span> </h1>
        <p class="conteudo-secundario2-paragrafo"> Setor de Recursos Humanos é um dos setores chave da empresa. Afinal de <br> contas, 
        o departamento tem adquirido mais e mais relevância na tomada de <br> decisões-chave e estratégicas. 
        Em parte, porque o valor da gestão de pessoas <br> tem mostrado o quanto isso influencia, diretamente, na melhora coletiva da 
        <br>organização e de uma série de índices, como:</p>
        <li class="text-marcadores">produtividade;</li>
        <li class="text-marcadores">motivação;</li>
        <li class="text-marcadores">engajamento;</li>
        <li class="text-marcadores">absenteísmo;</li>
        <li class="text-marcadores">turnover.</li>
    
        <p class="conteudo-secundario2-paragrafo">Entre outros dados que contribuem para a identificação de atividades que podem resolver <br> conflitos e prevenir eventuais 
        problemas sem falar, é claro, nas responsabilidades tradicionais <br> do departamento, como a admissão e demissão de funcionários, 
        a seleção e o recrutamento e a <br> atenção às exigências e leis trabalhistas.
        Vale destacar também que o RH está cada vez mais <br>alinhado a questões extra corporativas visando o bem-estar dos profissionais.
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