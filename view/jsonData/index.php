<?
if(file_exists(PATH."view/".$params.".php")){
    header("Content-type: application/json");
    include_once PATH."view/".$params.".php";
}