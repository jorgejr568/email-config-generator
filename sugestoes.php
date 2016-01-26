<?php

session_start();
require_once 'fun.php';
$fun=new fun();
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Tutoriais</title>


<?php $fun->headers(); ?>
   
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 menu" style="text-align: center;margin-bottom: 5px;">
          <?php
$fun->menu();
    ?>
        </div>

        <div class="col-md-2">

        </div>
    <div class="col-md-8">
    <?php
    $fun->event();
    ?>
        <form action="trata_sugestoes" method="POST">
            <div class="form-group"><label for="" class="control-label">Assunto: </label>
                <input type="text" required name="assunto" id='assunto' class="form-control">
            </div>
       
         
            <div class="form-group"><label for="" class="control-label">E-mail: </label>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-envelope" style="position: relative;top: 0px;"></span>
                <input type="email" name="email" required class="form-control">
                    </div>
                </div>

            <div class="form-group"><label for="" class="control-label">Sugest&atilde;o: </label>
                <textarea required name="sugestao" id="" cols="50" rows="10" style="height: 300px;" class="form-control"></textarea>            </div>
            <input type="submit" class="btn btn-block" value="Enviar sugest&atilde;o" style="background-color: #31358f;color: white">

    </div>

        </form>
    </div>
        <div class="col-md-2">
            </div>

</div>
    </div>

</body>
</html>

