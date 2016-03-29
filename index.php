<?php
ini_set('display_errors',1);
error_reporting(E_ERROR & E_WARNING & E_NOTICE);
@session_start();
$params=$_GET['params'];
$PARAMS=explode('/',$params);
require_once 'includes/includes.php';
if(file_exists(PATH."view/$PARAMS[0]/index.php")){
    require_once PATH."view/$PARAMS[0]/index.php";
}
else{
    require_once PATH."view/site/index.php";
}
if(!in_array($PARAMS[0],array("controller","headers","jsonData"))){
    $memoria[] = number_format(memory_get_usage() / 1024 / 1024, 2, ',', '');
    $memoria[] = number_format(memory_get_peak_usage() / 1024 / 1024, 2, ',', '');
    echo "<span style='display: none;'>$memoria[0] MB| $memoria[1] MB</span>";
}
?>