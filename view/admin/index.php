<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <?
    $PARAMS[1]=empty($PARAMS[1])?'home':$PARAMS[1];
    require_once PATH."model/extend.design.admin.php";
    $dClass=new designAdmin();
    $dClass->headers(array('bootstrap','font-awesome','datatables','sweetalert','jquery-mask'));
    ?>
    <title>Admin - Tutoriais de e-mail</title>
</head>
<body>
<div id="wrapper">
    <? $dClass->menu();?>
    <div id="page-wrapper">
        <?
        echo "<div class='row'><div class='col-md-10 col-md-offset-1'>";
        $dClass->breadcrumb();
        echo "</div></div>";
        if(file_exists(PATH."view/admin/$PARAMS[1].php")){
            require_once PATH."view/admin/$PARAMS[1].php";
        }
        else{
            require_once PATH."view/admin/home.php";
        }
        ?>
    </div>
</div>


</body>
</html>