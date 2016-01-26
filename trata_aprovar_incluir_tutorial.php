<meta charset="UTF-8"><?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
    $fun->conectaMysqli();
    $t=$_GET['t'];
    $res=$fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE md5(nome) like '$t'");
    $tutorial = mysqli_fetch_array($res);
    if($_GET['acao']=="APROVAR") {
        $_SESSION['msg']='Tutorial aprovado com sucesso.';
        $_SESSION['cor']='green';
        $fun->executaSQL("UPDATE SYS_tutoriais SET status='OK' WHERE MD5(nome) like '$t'");


    }
    elseif($_GET['acao']=='REJEITAR'){
        $_SESSION['msg']='Tutorial rejeitado com sucesso.';
        $_SESSION['cor']='green';

        unlink($tutorial['arq']);
        $fun->executaSQL("DELETE FROM SYS_tutoriais WHERE MD5(nome) like '$t'");

    }
    else{
    }
    header("Location: verificar_tutoriais");

}
else{
    $fun->saiDaqui();
}