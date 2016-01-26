
<?php
session_start();
require_once 'fun.php';
$fun=new fun();
$fun->conectaMysqli();
$email=$_POST['email'];
$tutorial=$_POST['tutorial'];
if($_POST['util']=='sim'){
	$funcionou=true;
}
else{
	$funcionou=0;
}
$fun->executaSQL("INSERT INTO SYS_analytics(email,funcionou,tutorial) VALUES('$email',$funcionou,'$tutorial')");

if($funcionou){
	echo "Obrigado pelo feedback";
}
else{
	$_SESSION['msg']='N&atilde;o funcionou ? Deixe aqui sua sugest&atilde;o.';
	$_SESSION['cor']='red';
}