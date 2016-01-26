<?php
session_start();

if(isset($_POST['sugestao']) && isset($_POST['assunto'])){
    require_once 'fun.php';
    $fun=new fun();
$fun->conectaMysqli();
                           $sugestao=str_replace("'",'"',$_POST['sugestao']);
                           $email=$_POST['email'];
                            $assunto=$_POST['assunto'];
                           $aplicativo=$_POST['aplicativo'];
                           $res=$fun->executaSQL("INSERT INTO SYS_sugestoes(assunto,email,sugestao,status,data) values (upper('$assunto  '),'$email','$sugestao','A VERIFICAR',CURDATE())");
                              $movimentacao="$email: Enviou uma sugestão.";
                            $fun->executaSQL("INSERT INTO SYS_movimentacoes (movimentacao) VALUES ('$movimentacao')");

                          	$_SESSION['msg']="Sugest&atilde;o enviada";
                          	$_SESSION['cor']='green';


$fun->fechaMysqli();
    header("Location: sugestoes");

}
else{
	header("Location: sugestoes");
}