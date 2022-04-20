<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Weslayne Kalline da Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alicia Floricultura">
    <meta name="keywords" content="Flor">
    <title>Alícia Floricultura</title>

    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="icon" type="imagem/ico" href="imagens/logo-icon.ico" />
</head>


<!--Na página seguinte, depois de feito o login, deve haver uma imagem ilustrativa da empresa,
um texto de um parágrafo explicando a função desta página e a data e horário do sistema.
Logo abaixo você terá um formulário com um combo-box com todos os departamentos.-->

<body>

    <!--Cabeçalho da página-->
    <header class="cabecalho">
        <!--Logo da página-->
        <img class="img-icon" src="imagens/logo.png" alt="Logotipo Alícia Floricultura">
        <h3 class="title">Alícia Floricultura</h3>
        <!--Data e hora do sistema-->        
        <div class="datetime">
          <?php
            date_default_timezone_set('America/Porto_Velho');
            $data_de_hoje = date("d/m/Y h:i:s");
            echo $data_de_hoje;
          ?>
        </div>
        <!--ícone para sair da página e voltar para a tela de login-->
        <a href="index.php"><img class="img-sair" src="imagens/logout.svg" alt="Sair"></a>        
    </header>
    
    <!--Conteúdo da página-->
    <main class="conteudo">

    <!--Conteúdo principal da página-->  
    <section class="conteudo-principal">
      <!--Conteúdo principal da página com o texto do lado esquerdo-->  
      <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Olá, <br><span>bem-vindo!</span> </h1>
      </div>
      <!--Conteúdo principal da página com a imagem do lado direito-->  
      <img class="conteudo-principal-imagem"src="imagens/Flowers-home.svg" alt="Imagem de uma mulher negra tocando uma flor">
    </section>

    <!--Conteúdo principal2 da página com um parágrafo explicando sobre a página-->  
    <section class="conteudo-principal2">
    <img class="conteudo-principal2-imagem"src="imagens/Florist-cuate.svg" alt="Imagem de uma mulher fazendo um buquê de flores">
      <div class="conteudo-principal2-escrito">
        <h1 class="conteudo-principal2-escrito-titulo">O que nossa empresa faz por <span>você?</span> </h1>
        <p class="conteudo-secundario2-paragrafo">Nossa empresa atua no mercado de floricultura há mais de 20 anos e
            atualmente conta com mais de<br> <strong>500</strong> associados na região Norte do Brasil. <br>
            Crescemos e nos adaptamos as mudanças tecnológicas e com isso, expandimos a nossa empresa <br> para que 
            solicitações de fornecimento sejam realizadas online. <br>
            Fornecemos as mais diversas plantas ornamentais e flores para deixar o ambiente mais agradável <br>
            e atender o gosto dos nossos clientes! <br>
            <div class="text-end">Venha já fazer parte da nossa equipe!</div>
        </p>
      </div>
    </section>

    <!--Conteúdo secundário da página com um combobox para o usuário selecionar qual setor deseja conhecer-->  
    <section class="conteudo-secundario">
        <div class="form">
            <h2>Conheça nossos departamentos</h2>
              <form action="depart.php" method="get">
                <label for="">Selecione uma opção</label>
                <br>

                <!--Aqui coloca o "name" que é essecial para fazer a conexão com depart.php (página de manipulação dos dados)-->
                <select name="setor" >
                    <option value=" "></option>
                  <!--O value também é importante, porque na página de manipulação dos dados, você deve colocar o valor igual ao que está aqui-->                  
                    <option value="setorAdm">Setor Administrativo</option>
                    <option value="setorFin">Setor Financeiro</option>
                    <option value="RH">Recursos Humanos</option>
                    <option value="setorCom">Setor Comercial</option>
                    <option value="setorOpe">Setor Operacional</option>
                </select>
                    <input id="bt" type="submit" value="Conhecer">
              </form>
        </div>
    </section>
    
  </main>

  <!--Rodapé básico da página-->
  <footer class="rodape">
        <img class="rodape-imagem" src="imagens/logo.png" alt="Gado Forte">
        <h3>Alícia Floricultura</h3>
    </footer>
</body>
</html>