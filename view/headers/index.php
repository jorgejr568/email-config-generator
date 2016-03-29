<?
if(file_exists(PATH."view/".$params)){
    $extension=pathinfo(PATH."view/".$params);
    switch($extension['extension']){
        case "css":
            header("Content-type: text/css");
            break;
        case "js":
            header("Content-type: text/javascript");
            break;
        case "php":
            header("Content-type: text/javascript");
            break;
        case 'json':
            header("Content-type: application/json");
            break;
        case 'woff':
            header("Content-type: application/x-font-woff");
            break;
        case 'woff2':
            header("Content-type: application/x-font-woff");
    }
    if($extension['extension']!="php"){
        echo file_get_contents(PATH."view/".$params);
    }
    else{
        include_once PATH."view/".$params;
    }
}