<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
require_once "fun.php";
$fun=new fun();
                if ($_POST['VERIFICACAO'] == "VERIFICACAO") {
                    $fun->getDefines();
                    $tmpname = $_FILES['imagem']['tmp_name'];
                    $ftp = $fun->conectaFTP();
                    $fun->logarFTP($ftp);
                    $ext = end(explode('.', $_FILES['imagem']['name']));
                    ftp_put($ftp, FTPPATH.'tmp_images/image.' . $ext, $tmpname, FTP_BINARY);
                    ftp_close($ftp);
 #echo "<a href='coordenadas?link=http://jorgejunior.x-br.com/tmp_images/image." . $ext."' class='btn btn-danger'>Ver imagem</a>";

                    header("Location: coordenadas?link=tmp_images/image." . $ext);
                }else{


if($fun->verificarUserSaida()){
if(isset($_GET['link'])){
    ?>
    <script>
    function showCoords(event) {
        var x = event.clientX;
        var y = event.clientY;
        document.getElementById('x').innerHTML=x;
        document.getElementById('y').innerHTML=y;
    }
</script>
<link rel="stylesheet" href="css/bootstrap.min.css">

<style>
    img,body,html{
        padding: 0;
        margin: 0;
    }
</style>

<img src='<?php echo $_GET['link'];?>' onclick='showCoords(event)' style="border: 1px solid ">

<p><input type="button" onclick="javascript:window.location.href='coordenadas';" class="btn btn-danger" value="Voltar" style="position: fixed;top: 0; right: 0;"></p>
<table class="table" style="width: 30px;position: fixed;top: 40px;;right: 60px;">
    <thead>
    <tr><th>
    X
</th>
<th>Y</th>
</tr>
</thead>
<tbody>
    <tr>
    <td id="x"></td>
    <td id="y"></td>
</tr>
</tbody>

</table>
    <?php

}
else {
    ?>
    <!doctype html>
    <html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Coordenadas</title>
        <?php
        $fun->headers();
        ?>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 menu">
                <?php
                $fun->menu();
                ?>
            </div>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group"><label for="" class="control-label"></label><input type="file"
                                                                                               accept="image/gif,image/jpeg,image/png"
                                                                                               class="form-control"
                                                                                               name="imagem" required></div>
                    <input type="hidden" value="VERIFICACAO" name="VERIFICACAO">

                    <input type="submit" value="Verificar" class="btn btn-success">
                </form>
            
 
            </div>
                    <div class="col-md-2"></div>

        </div>
    </div>
    </body>
    </html>
    <?php
}
}
else{
    $fun->saiDaqui();
}
}
?>