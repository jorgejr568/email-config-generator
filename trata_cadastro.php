<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()) {
    $usuario=$_POST['usuario'];
    $nome=$_POST['nome'];
    if(!empty($usuario) && !empty($nome)){
        $fun->conectaMysqli();
        if(empty($_POST['senha'])){
        $fun->executaSQL("UPDATE SYS_usuarios SET usuario='$usuario', nome='$nome' WHERE usuario like '".$_SESSION['login_tutorial_hostnet']['usuario']."'");
            #echo "UPDATE SYS_usuarios SET usuario='$usuario', nome='$nome' WHERE usuario like '".$_SESSION['login_tutorial_hostnet']['usuario']."'";

        }
        else{
            $senha=MD5($_POST['senha']);
            $fun->executaSQL("UPDATE SYS_usuarios SET usuario='$usuario', nome='$nome',senha='$senha' WHERE usuario like '".$_SESSION['login_tutorial_hostnet']['usuario']."'");
            #echo "UPDATE SYS_usuarios SET usuario='$usuario', nome='$nome',senha='$senha' WHERE usuario like '".$_SESSION['login_tutorial_hostnet']['usuario']."'";

        }
        $fun->fechaMysqli();
        session_destroy();
        session_start();
        $_SESSION['msg']="Seus dados foram alterados com sucesso. Clique <a href='administracao' style='color: #444;text-decoration: none'>aqui</a> para retornar a administração.";
        $_SESSION['cor']='green';
        header("Location: index");

    }
    else{
        $_SESSION['msg']="Você esqueceu de preencher algum campo";
        $_SESSION['cor']='red';
        header("Location: cadastro");
    }

}
else{
    $fun->saiDaqui();
}