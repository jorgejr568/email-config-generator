<?php
session_start();
require_once 'fun.php';
$fun=new fun();
$fun->conectaMysqli();
$id=$_GET['id'];
$fun->executaSQL("DELETE FROM SYS_analytics WHERE md5(id) like '$id'");
header("Location: verificar_tutoriais");
