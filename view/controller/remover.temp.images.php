<?php
$counter=$_POST['counter'];
$tutorial=$_POST['tutorial'];
$email=$_POST['email'];
for($i=0;$i<=$counter;$i++){
    if(file_exists(PATH."view/images/forTutorialGenerated/$tutorial/image_temp".$i.$email.".png")) {
        if (!unlink(PATH . "view/images/forTutorialGenerated/$tutorial/image_temp" . $i . $email . ".png")) {
            echo "Não foi possível remover " . PATH . "view/images/forTutorialGenerated/$tutorial/image_temp" . $i . $email . ".png\n";

        }
    }
}