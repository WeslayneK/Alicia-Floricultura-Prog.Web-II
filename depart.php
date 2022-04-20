<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/ico" href="imagens/logo-icon.ico" />
    <title>Departamentos - Alícia Floricultura</title>
</head>
<body>

<?php

    $depart = $_GET['setor'];

    if($depart == "setorAdm"){
        include("departamentos/setorAdm.php");
    }else{
        if($depart == "setorFin"){
            include("departamentos/setorFin.php");
        }else{
            if($depart == "RH"){
                include("departamentos/RH.php");
            }else{
                if($depart == "setorCom"){
                    include("departamentos/setorCom.php");
                }else{
                    if($depart == "setorOpe"){
                        include("departamentos/setorOpe.php");
                    }
                }
            }
        }
    }
?>
    
</body>
</html>