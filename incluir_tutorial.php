<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()) {
    ?>
    <!doctype html>
    <html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tutoriais</title>
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
            <div class="col-md-1"></div>
            <div class="col-md-10 content">
                <?php
                $fun->event();

                include_once 'tutorial_wikihow.php';
                ?>
                <form action="trata_incluir_tutorial.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="nome_tutorial" class="control-label">Digite o nome do tutorial: </label>

                                <input type="text" name="nome_tutorial" id="nome_tutorial"
                                       placeholder="Digite o nome do tutorial: " class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="nome_tutorial" class="control-label">Selecione a categoria do
                                    tutorial: </label>
                                <select class="form-control chosen-select" name="grupo">
                                    <?php
                                    $fun->conectaMysqli();
                                    $res2 = $fun->executaSQL("SELECT * FROM SYS_grupos");
                                    for ($i = 0; $i < mysqli_num_rows($res2); $i++) {
                                        $linha2 = mysqli_fetch_array($res2);
                                        echo "<option value='$linha2[1]'>$linha2[0]</option>";
                                    }
                                    unset($res2, $linha2);
                                    $fun->fechaMysqli();
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="tutorial" class="control-label">Digite o conteúdo do tutorial: </label>

                                <textarea name="conteudo_tutorial" id="conteudo_tutorial: " class="form-control"
                                          rows="40" placeholder="Digite o conteúdo do tutorial: "></textarea>

                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-12">
                            <div class="btn-group" style="width: 100%">

                                <input type="submit" value="Incluir tutorial" class="btn btn-success"
                                       style="width: 50%;">
                                <input type="button" value="Voltar" onclick="javascript:history.back(-1);"
                                       class="btn btn-danger" style="width: 50%">
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
    $fun->saiDaqui();
}
?>

