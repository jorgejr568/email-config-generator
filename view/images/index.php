<?php
if(file_exists(PATH."view/$params")){
    $fileInfo=pathinfo(PATH."view/".$params);
    switch($fileInfo['extension']){
        case "jpg":
            header("Content-type: image/jpeg");
            break;
        case "jpeg":
            header("Content-type: image/jpeg");
            break;
        case "png":
            header("Content-type: image/png");
            break;
        case "gif":
            header("Content-type: image/gif");
            break;
    }
    echo file_get_contents(PATH."view/".$params);
}