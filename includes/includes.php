<?php
define("siteURL","http://localhost/config.email/");
define("PATH","/var/www/html/config.email/");

function errorSweet($e,$confirm){
    $confirm=isset($confirm)?"\"$confirm\"":"\"true\"";
    ?>
    <script>
        $(document).ready(function () {
            sweetAlertInitialize();
            swal({title: "",
                text: "<?= $e;?>",
                showConfirmButton: <?= $confirm;?>,
                html: true,
                confirmButtonClass: "btn-danger",
                type: 'error',
                confirmButtonText: 'Fechar'});
        });
    </script>
    <?
}
function successSweet($e,$confirm){
    $confirm=isset($confirm)?"\"$confirm\"":"\"true\"";
    ?>
    <script>
        $(document).ready(function () {
            sweetAlertInitialize();
            swal({title: "",
                text: "<?= $e;?>",
                showConfirmButton: <?= $confirm;?>,
                html: true,
                type: 'success',
                confirmButtonClass: "btn-success",
                confirmButtonText: 'Fechar'});
        })
    </script>
    <?
}
function bootstrapError($e){
    ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle fa-lg"></i><span class="close" data-dismiss="alert">&times;</span> <?= $e;?></div>
    <?
}
function bootstrapSuccess($e){
    ?>
    <div class="alert alert-success"><span class="close" data-dismiss="alert">&times;</span> <?= $e;?></div>
    <?
}
function image($link){
    echo "<a href='$link' data-lightbox='imagem-data'><img src='$link'/></a><br /><br />";
}
function printR($array){
    echo "<pre>";print_r($array);echo "</pre>";
}