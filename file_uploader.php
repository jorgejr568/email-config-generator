<?php
session_start();
require_once "fun.php";
$fun=new fun();
if($fun->verificarUserSaida()) {
    ?>
    <!doctype html>
    <html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>File Uploader</title>
        <?php
        $fun->headers();
        $fun->getDefines();
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
                    <div class="form-group">
                        <label class="control-label"></label>
                        <select class="form-control chosen-select" name='tutorial'>
                            <?php
                            $fun->conectaMysqli();

                            $res2 = $fun->executaSQL("SELECT * FROM SYS_grupos ORDER BY id_grupo");
                            $ok=$_SESSION['login_tutorial_hostnet']['status']=='ADMIN'?'OK':MD5('nao é admin');
                            if (isset($_POST['tutorial'])) {
                                for ($i = 0; $i < mysqli_num_rows($res2); $i++) {
                                    $linha2 = mysqli_fetch_array($res2);
                                    echo "<optgroup label='$linha2[0]'>";
                                    if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
                                        $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE grupo=$linha2[1]");

                                    }
                                    else {
                                        $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE grupo=$linha2[1] and status in('VERIFICANDO')");
                                    }
                                    for ($j = 0; $j < mysqli_num_rows($res); $j++) {

                                        $linha = mysqli_fetch_array($res);
                                        if ($linha[0] == $_POST['tutorial']) {
                                            echo "<option selected value='$linha[0]'>$linha[0]</option>";
                                        } else {
                                            echo "<option value='$linha[0]'>$linha[0]</option>";
                                        }
                                    }
                                    echo "</optgroup>";
                                }
                            } else {
                                for ($i = 0; $i < mysqli_num_rows($res2); $i++) {
                                    $linha2 = mysqli_fetch_array($res2);
                                    echo "<optgroup label='$linha2[0]'>";
                                    if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
                                        $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE grupo=$linha2[1]");

                                    }
                                    else {
                                        $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE grupo=$linha2[1] and status in('VERIFICANDO')");
                                    }                                    for ($j = 0; $j < mysqli_num_rows($res); $j++) {

                                        $linha = mysqli_fetch_array($res);
                                        echo "<option value='$linha[0]'>$linha[0]</option>";
                                    }
                                    echo "</optgroup>";
                                }

                            }

                            $fun->fechaMysqli();

                            ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group"><label for="" class="control-label"></label><input type="file"
                                                                                               accept="image/gif,image/jpeg,image/png"
                                                                                               class="form-control"
                                                                                               name="imagem" required>
                    </div>
                    <input type="hidden" value="VERIFICACAO" name="VERIFICACAO">
                    <?php
                    if ($_POST['VERIFICACAO'] == "VERIFICACAO") {

                        $tmpname = $_FILES['imagem']['tmp_name'];
                        $ftp = $fun->conectaFTP();
                        $fun->logarFTP($ftp);
                        if (ftp_put($ftp, FTPPATH.'tutoriais/' . $_POST['tutorial'] . DIRECTORY_SEPARATOR . $_FILES['imagem']['name'], $tmpname, FTP_BINARY)) {
                            $msg = "Arquivo movido com sucesso";
                            $class = 'alert-success';
                        } else {
                            $msg = FTPPATH.'tutoriais/' . $_POST['tutorial'] . DIRECTORY_SEPARATOR . $_FILES['imagem']['name'];
                            $class = 'alert-danger';
                        }
                        ?>
                        <div class="alert <?php echo $class; ?> fade in"><a data-dismiss="alert"
                                                                            class="close">&times;</a><?php echo $msg; ?>
                        </div>
                        <?php
                        ftp_close($ftp);
                    }
                    ?>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </form>


            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="chosen.jquery.js" type="text/javascript"></script>
    <script src="prism.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        function reload() {
            var config = {
                '.chosen-select': {},
                '.chosen-select-deselect': {allow_single_deselect: true},
                '.chosen-select-no-single': {disable_search_threshold: 10},
                '.chosen-select-no-results': {no_results_text: 'Nada foi encontrado'}
            }
            $(".chosen-select").chosen({no_results_text: "Nenhum resultado para "});
            $(".chosen-select").chosen({allow_single_deselect: true});


            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
        }
        reload();
    </script>
    </body>
    </html>
    <?php
}
else{
    $fun->saiDaqui();
}