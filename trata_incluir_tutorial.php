<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()) {
    if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
        $status='OK';
    }
    else{
        $status='A VERIFICAR';
    }
    $fun->conectaMysqli();
    $nome = $_POST['nome_tutorial'];
    $conteudo = $_POST['conteudo_tutorial'];
    $grupo = $_POST['grupo'];

    $arq = "tutoriais/" . str_replace(' ', '_', $nome) . ".php";

    $fun->executaSQL("INSERT INTO SYS_tutoriais(nome,arq,status,qtd_acessos,grupo) VALUES('$nome','$arq','$status',0,$grupo)");
    if ($fun->affected_rows() > 0) {
    $fun->executaSQL("INSERT INTO SYS_movimentacoes(movimentacao) VALUES('".$_SESSION['login_tutorial_hostnet']['nome']." incluiu o tutorial $nome')");
        $file = fopen($arq, 'w+');
        fwrite($file, $conteudo);
        fclose($file);
        $_SESSION['msg'] = "Tutorial inclu&iacute;do com sucesso";
        $_SESSION['cor'] = "green";
        $ftp=$fun->conectaFTP();
        $fun->logarFTP($ftp);
        $fun->getDefines();
        ftp_mkdir($ftp, FTPPATH.'tutoriais/' . $nome);
        ftp_chmod($ftp, 0777, FTPPATH.'tutoriais/' . $nome);
        ftp_close($ftp);
    } else {
        $_SESSION['msg'] = "Tutorial n&atilde;o inclu&iacute;do";
        $_SESSION['cor'] = "red";
    }
    mysqli_close($con);
    header("Location: index");
}
else{
    $fun->saiDaqui();
}