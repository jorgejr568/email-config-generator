<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
    if(!empty($_GET['t'])){
        $t=$_GET['t'];
        $fun->conectaMysqli();
        $fun->executaSQL("UPDATE SYS_tutoriais set qtd_acessos=0 WHERE md5(nome) like '$t'");
        $_SESSION['msg']='Contador resetado com sucesso';
        $_SESSION['cor']='green';
        header("Location: verificar_tutoriais");

    }
    else{
        $_SESSION['msg']='Tutorial n&atilde;o informado';
        $_SESSION['cor']='green';
        header("Location: verificar_tutoriais");
    }
}
else{
    $fun->saiDaqui();
}