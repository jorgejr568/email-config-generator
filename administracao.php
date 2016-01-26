<?php
$bool=true;

session_start();
require_once 'fun.php';
$fun=new fun();

                if(isset($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
                    $usuario=$_POST['usuario'];
                    $senha=MD5($_POST['senha']);
                    $fun->conectaMysqli();
                    $res=$fun->executaSQL("SELECT * FROM SYS_usuarios WHERE usuario like '$usuario' and senha like '$senha'");
                    $fun->fechaMysqli();
                    if(mysqli_num_rows($res)==1) {
                        $usuario=mysqli_fetch_array($res);
                        $_SESSION['login_tutorial_hostnet']['nome']=$usuario['nome'];
                        $_SESSION['login_tutorial_hostnet']['status']=$usuario['status'];
                        $_SESSION['login_tutorial_hostnet']['usuario']=$usuario['usuario'];
                        $_SESSION['msg']='Bem vindo, '.$_SESSION['login_tutorial_hostnet']['nome'];
                        $_SESSION['cor']='green';
                        header("Location: index");
                        $bool=false;
                    }

                    else{
                        $_SESSION['msg']='Usuário não encontrado ou senha incorreta';
                        $_SESSION['cor']='red';
                    }

                }


if($bool) {
    if (!$fun->verificarUserSaida()) {
        ?>

        <!doctype html>
        <html lang="PT-BR">
        <head>
            <title>Administração</title>
            <meta charset="UTF-8">
            <?php
            $fun->headers();
            ?>
        </head>

        <body>
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12 menu" style="text-align: center;margin-bottom: 5px;">
                    <?php
                    $fun->menu();
                    ?>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 content">
                    <?php
                    $fun->event();
                    ?>
                    <form method="POST">
                        <div class="form-group">
                            <label for="" class="control-label">Usuário:</label>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-user" style="top: 0"></span>
                                <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control"
                                   required value="<?php echo $_POST['usuario']; ?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Senha:</label>
                            <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-lock" style="top: 0"></span>
                                <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" required>
                        </div>
                            </div>
                        <input type="submit" class="btn btn-block" value="Entrar" style="background-color: #31358f;color: white">
                    </form>

                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
        </body>
        </html>


        <?php
    } else {
        $_SESSION['msg'] = 'Você já encontra-se logado.';
        $_SESSION['cor'] = 'green';
        header("Location: index");
    }
}