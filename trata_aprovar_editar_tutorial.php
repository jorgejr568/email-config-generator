<meta charset="UTF-8"><?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
    $fun->conectaMysqli();
    $t=$_GET['t'];
    $res=$fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE md5(nome) like '$t'");
    $tutorial = mysqli_fetch_array($res);
    print_r($tutorial);
    if($_GET['acao']=="APROVAR") {
        $conteudo_novo = file_get_contents('tutoriais' . DIRECTORY_SEPARATOR . $tutorial['nome'] . DIRECTORY_SEPARATOR.'alter.php');
        $file=fopen($tutorial['arq'],'w+');
        fwrite($file,$conteudo_novo);
        fclose($file);
        $_SESSION['msg']='Alterações aprovadas com sucesso.';
        $_SESSION['cor']='green';
        unlink('tutoriais' . DIRECTORY_SEPARATOR . $tutorial['nome'] . DIRECTORY_SEPARATOR.'alter.php');
        $fun->executaSQL("UPDATE SYS_tutoriais SET status='OK' WHERE MD5(nome) like '$t'");


    }
    elseif($_GET['acao']=='REJEITAR'){
        $_SESSION['msg']='Alterações rejeitadas com sucesso.';
        $_SESSION['cor']='green';
        unlink('tutoriais' . DIRECTORY_SEPARATOR . $tutorial['nome'] . DIRECTORY_SEPARATOR.'alter.php');
        $fun->executaSQL("UPDATE SYS_tutoriais SET status='OK' WHERE MD5(nome) like '$t'");

    }
    else{
    }
    header("Location: verificar_tutoriais");

}
else{
    $fun->saiDaqui();
}