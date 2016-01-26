<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()) {
    $fun->conectaMysqli();
    $t=$_POST['t'];
    $res=$fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE md5(nome) like '$t' AND status='OK'");
    $tutorial=mysqli_fetch_array($res);
    if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
        $file=fopen($tutorial['arq'],'w+');
        fwrite($file,$_POST['conteudo_tutorial']);
        fclose($file);
        $_SESSION['msg']='Alterações realizadas com sucesso.';
        $_SESSION['cor']='green';
    }
    else{
        $file=fopen('tutoriais'.DIRECTORY_SEPARATOR.$tutorial['nome'].DIRECTORY_SEPARATOR.'alter.php','w+');
        fwrite($file,$_POST['conteudo_tutorial']);
        fclose($file);
        $fun->executaSQL("UPDATE SYS_tutoriais SET status='VERIFICANDO' WHERE md5(nome) like '$t'");
            $fun->executaSQL("INSERT INTO SYS_movimentacoes(movimentacao) VALUES('".$_SESSION['login_tutorial_hostnet']['nome']." editou o tutorial ".$tutorial['nome']."')");

        $_SESSION['msg']='Alterações aguardando aprovação de um administrador.';
        $_SESSION['cor']='green';
    }
    header("Location: verificar_tutoriais");
}
else{
    $fun->saiDaqui();
}