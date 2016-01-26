<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()){
    $status=strtoupper($_POST['status']);
    $grupo=$_POST['grupo'];
    $t=$_POST['t'];
    $fun->conectaMysqli();
    $fun->executaSQL("UPDATE SYS_tutoriais SET status='$status', grupo='$grupo' WHERE MD5(nome) like '$t'");
        $_SESSION['msg']='Atualização de status e grupo feita com sucesso';
        $_SESSION['cor']='green';
    $fun->fechaMysqli();

    header("Location: verificar_tutoriais");
}
else{
    $fun->saiDaqui();
}