<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()) {
    $fun->conectaMysqli();
    $t = $_GET['t'];
    $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais where MD5(nome) like '$t'");
    $fun->fechaMysqli();
    if (mysqli_num_rows($res) == 1) {
        $tutorial=mysqli_fetch_array($res);
        ?>
        <!doctype html>
        <html lang="PT-BR">
        <head>
            <meta charset="UTF-8">
            <?php
            $fun->headers();
            ?>
            <title>Tutoriais</title>
        </head>
        <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 menu">
                    <?php
                    $fun->menu();

                    ?>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10 content">
                    <?php
                    $fun->event();

                    include_once 'tutorial_wikihow.php';
                    ?>
                    <form action="trata_editar_tutorial" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="nome_tutorial" class="control-label">Digite o nome do tutorial: </label>

                                    <input type="text" name="nome_tutorial" id="nome_tutorial"
                                           placeholder="Digite o nome do tutorial: " class="form-control"
                                           value="<?php echo $tutorial['nome'];?>" disabled>
                                    <input type="hidden" value="<?php echo $t;?>" name="t">
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <label for="tutorial" class="control-label">Digite o conteúdo do tutorial: </label>


                                <textarea name="conteudo_tutorial" id="conteudo_tutorial: " class="form-control"
                                          rows="40"
                                          placeholder="Digite o conteúdo do tutorial: "><?php echo file_get_contents($tutorial['arq']); ?></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-12">
                                <div class="btn-group" style="width: 100%">

                                    <input type="submit" value="Atualizar" class="btn btn-success"
                                           style="width: 50%;">
                                    <input type="button" value="Voltar" onclick="javascript:history.back(-1);"
                                           class="btn btn-danger" style="width: 50%">
                                   <!-- <a href="< echo $tutorial['arq'];?>" download="< echo $tutorial['nome'].'.php';?>" class="btn btn-info" style="width: 33.33%">Download</a> -->
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="col-md-1">
                    </div>

                </div>
            </div>
        </body>
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
        </html>
        <?php

    }
    else{
        $_SESSION['msg']='Tutorial n&atilde;o encontrado';
        $_SESSION['cor']='red';
        header("Location: verificar_tutoriais");
    }
}
else{
    $fun->saiDaqui();
}?>

