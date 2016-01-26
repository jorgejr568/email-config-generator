<?php
session_start();
require_once 'fun.php';
    $fun=new fun();
if($_SESSION['login_tutorial_hostnet']){
    if(!empty($_GET['n'])){
        $fun->conectaMysqli();
        if(strcmp($_GET['n'],MD5('%'))==0){
        $sql='DELETE FROM SYS_movimentacoes WHERE 1';
            $msg='Limpeza nas notificações efetuada com sucesso.';
        }
        else{
        $sql="DELETE FROM SYS_movimentacoes WHERE md5(id) like '".$_GET['n']."'";


        }
        $fun->executaSQL($sql);
        $fun->fechaMysqli();
        if(!empty($msg)) {
            $_SESSION['msg'] = $msg;

            $_SESSION['cor'] = 'green';
        }header("Location: notificacoes");

    }
    else{
        header("Location: notificacoes");
    }
}
else{
$fun->saiDaqui();
}
