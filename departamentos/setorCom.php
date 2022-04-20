<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Weslayne Kalline da Silva">
    <meta name="keywords" content="Floricultura">
    <link rel="stylesheet" href="CSS/style2.css">
   <title>Setor Comercial - Alícia Floricultura</title>
   <link rel="icon" type="imagem/ico" href="imagens/logo-icon.ico"/>
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
        <h1 class="conteudo-principal2-escrito-titulo">Setor Comercial</h1>
        <p class="conteudo-secundario2-paragrafo">É uma das principais áreas da nossa empresa porque,
        além de cuidar a relação com o cliente e do <br> processo de vendas, o marketing costuma 
        fazer parte do departamento — ainda que indiretamente. <br> O enfoque do setor é a realização dos 
        clientes e dos prospectos. Trata-se de um departamento com  <br> ação de destaque, já que planeja 
        ações externas, mas preocupa-se com o que ocorre internamente <br> também. O que permite ações em 
        conjunto com o próprio <strong>RH</strong>. <br>
        <br>
        Além disso, há a comunicação da empresa. Embora não faça parte do setor comercial, atua de 
        <br> maneira similar ao que citamos do marketing — segue anexada indiretamente, já que as suas 
        <br> ações são focadas na resposta do consumidor, para as ações externas e dos colaboradores <br> para as campanhas internas.
        </p>
      </div>
      <img class="conteudo-principal2-imagem" src="imagens/setorCom.svg" alt="Imagem ilustrativa do Setor Comercial">

    </section>

    <!--Rodapé básico da página-->
    <footer class="rodape">
        <img class="rodape-imagem" src="imagens/logo.png" alt="Gado Forte">
        <h3>Alícia Floricultura</h3>
    </footer>
</body>
</html>