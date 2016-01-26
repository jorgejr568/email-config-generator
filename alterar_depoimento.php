<?php
session_start();
require_once 'fun.php';
$fun = new fun();
if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN') {
    $fun->conectaMysqli();
    switch($_GET['acao']){
        case 'ALTERAR_STATUS':
            $status=$_GET['status'];
            $sugestao=$_GET['sugestao'];
            $fun->executaSQL("UPDATE SYS_sugestoes SET status='$status' WHERE MD5(id) like '$sugestao'");
            $_SESSION['msg']='Status alterado com sucesso';
            $_SESSION['cor']='green';
            break;
        case 'REMOVER':
            $sugestao=$_GET['sugestao'];
            $fun->executaSQL("DELETE FROM SYS_sugestoes WHERE MD5(id) like '$sugestao'");
            $_SESSION['msg']='Sugest&atilde;o deletada com sucesso';
            $_SESSION['cor']='green';
            break;
        default:
            break;
    }
    header("Location: verificar_sugestoes");

}
else{
    $fun->saiDaqui();
}
