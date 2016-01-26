<?php
session_start();
require_once 'fun.php';
$fun=new fun();

if($fun->verificarUserSaida()){
    ?>
    <!doctype html>
    <html lang="PT-BR">
    <head>
        <?php
        $fun->headers();
        ?>
        <meta charset="UTF-8">
        <title>Alterar cadastro</title>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php
                $fun->menu();
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php
                $fun->event();
                $fun->conectaMysqli();
                $res=$fun->executaSQL("SELECT * FROM SYS_usuarios WHERE usuario like '".$_SESSION['login_tutorial_hostnet']['usuario']."'");
                $usuario=mysqli_fetch_array($res);
                ?>
                <form action="trata_cadastro" method="post"><div class="alert alert-info">Após alterar seus dados, será deslogado.</div>
                <div class="form-group"><label for="" class="control-label">Nome:</label><input type="text" placeholder="Digite seu nome" name="nome" value="<?php echo $usuario['nome'];?>" class="form-control"></div>
                <div class="form-group"><label for="" class="control-label">Senha:</label><input type="password" placeholder="Deixe vazia, caso não deseje alterar" name="senha" class="form-control"></div>
                <div class="form-group"><label for="" class="control-label">Usuário:</label><input type="text" placeholder="Digite seu usuário" name="usuario" value="<?php echo $usuario['usuario'];?>" class="form-control"></div>
                    <input type="submit" value="Alterar" class="btn btn-block btn-success">
                </form>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
    </body>
    </html>
<?php
}
else{
    $fun->saiDaqui();
}