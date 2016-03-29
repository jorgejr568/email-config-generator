<?php
$PARAMS[0]='site';
$PARAMS[1]=empty($PARAMS[1])?'home':$PARAMS[1];
require_once PATH."model/class.design.php";
$dClass=new design();
?>
<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Configuração de e-mail - Hostnet</title>
    <? $dClass->headers();?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <? $dClass->menu();?>
        </div>
        <div class="row">
            <div class="container">
                <?
                    if(file_exists(PATH."view/site/".$PARAMS[1].".php")){
                        require_once PATH."view/site/".$PARAMS[1].".php";
                    }
                else{
                    require_once PATH."view/site/home.php";
                }
                ?>
            </div>
        </div>
    </div>
    <footer class="footer text-center well"><p>&copy; 2000-<?= date('Y');?> Hostnet. Todos os direitos reservados.</p></footer>
</body>
</html>