<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Weslayne Kalline da Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alicia Floricultura">
    <meta name="keywords" content="Floricultura">
    <link rel="icon" type="imagem/ico" href="imagens/logo-icon.ico"/>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login - Alícia Floricultura</title>
    <a href="https://storyset.com/people">People illustrations by Storyset</a>
</head>

<!--A página de login deve ser enviada pelo método post para uma página de tratamento de dados 
que somente permita o usuário “fernando” e a senha “espiral22”. Caso contrário deve 
retornar à página inicial.-->

<body>

    <!--Cabeçalho da página-->
    <header class="cabecalho">
        <!--Imagem com a logo da página e título-->
        <img class="img-icon" src="imagens/logo.png" alt="Logotipo Floricultura">
        <h3 class="title">Alícia Floricultura</h3>
    </header>

    <!--Dividindo as sessões com a imagem e o formulário de login-->

    <!--Box com a imagem na tela do login-->
    <div class="box-login">
        <div class="img-box">
            <img src="imagens/Flowers-pana.svg" alt="Mulher segurando um buquê de flores">
        </div>
        
        <!--Conteúdo do box (form e imagens)-->   
        <div class="conteudo-box">
            <div class="form-box">
                <!--Logo da empresa dentro do formulário-->
                <div class="img-logo">
                    <img src="imagens/logo.png" alt="Logotipo Floricultura">
                </div>

                <!--Título do login-->
                <h2>Entrar</h2>

                <!--Form com a ação de ir para o tratamento dos dados no arquivo "login.php"-->
                <form action="login.php" method="post">
                    
                    <!--Campo Usuário-->
                    <div class="form-input">
                        <label>Usuário:</label>
                        <input type="text" name="name" size="10" placeholder="Informe o usuário">
                    </div>
                    <br>
                    <!--Campo Senha-->
                    <div class="form-input">
                        <label>Senha:</label>
                        <input type="password" name="pass" size="10" placeholder="Digite a senha">
                    </div>

                    <!--Botão de Envio-->
                    <button id="btn" type="submit" value="Acessar"><b>Acessar</b></button>
                    </form>
            </div>
        </div>
    </div>
    
</body>
</html>