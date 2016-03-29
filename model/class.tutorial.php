<?php

/**
 * Autor: Jorge Junior
 * Data: 23/03/16
 * Hora: 15:03
 */
require_once PATH."model/class.usuario.php";
class tutorial extends usuario
{
    public function tutorialExiste($idTutorial){
        $this->connect();
        $res=$this->query("SELECT id_tutorial FROM ".$this->PREFIXO."tutoriais WHERE id_tutorial=$idTutorial");
        $this->close();
        if($res->num_rows==1){
            return true;
        }
        else{
            return false;
        }
    }
    public function getTutorialData($idTutorial){
        $this->connect();
        $res=$this->query("SELECT * FROM ".$this->PREFIXO."tutoriais WHERE id_tutorial=$idTutorial");
        $this->close();
        return $res->fetch_assoc();
    }
    public function getPublishedTutoriais(){
        $this->connect();
        $res=$this->query("SELECT * FROM ".$this->PREFIXO."tutoriais WHERE status in('OK','VERIFICANDO') ORDER by grupo");
        $this->close();
        return $this->fetch_all($res);
    }
    public function getTutorialGroups(){
        $this->connect();
        $res=$this->query("SELECT * FROM ".$this->PREFIXO."grupos ORDER BY id_grupo");
        $this->close();
       return $this->fetch_all($res);
    }
    public function getTutoriaisFromOneGroup($idGroup){
        $this->connect();
        $res=$this->query("SELECT t.* FROM ".$this->PREFIXO."tutoriais t,".$this->PREFIXO."grupos g WHERE status in('OK','VERIFICANDO') AND t.grupo=g.id_grupo AND g.id_grupo=$idGroup");
        $this->close();
        return $this->fetch_all($res);
    }
    public function gerarTutorial($email,$tutorial){
        $log=$this->logIt($email,$tutorial);
        function getBase64FromGeneration(){
            if(!defined("TUTORIAL_PATH_TO_GENERATE")){
                define("TUTORIAL_PATH_TO_GENERATE",PATH."view/images/forTutorialGenerated/tmpIMG.png");
            }
            return 'data:image/png;base64,'.base64_encode(file_get_contents(TUTORIAL_PATH_TO_GENERATE));
        }
        $tutorialData=$this->getTutorialData($tutorial);
        define("EMAIL_CLI",$email);
        define("NOME_CONTA",ucwords(str_replace(array('_','.','-'),' ',current(explode('@',$email)))));
        define("DOMINIO_CLI",end(explode('@',$email)));
        define("USUARIO_CONTA",current(explode('@',$email))."=".DOMINIO_CLI);
        define("CONTA_ID",current(explode('.',DOMINIO_CLI))." - ".EMAIL_CLI);
        define("TUTORIAL_PATH_TO_GENERATE",PATH."view/images/forTutorialGenerated/tmpIMG.png");
        define("TUTORIAL_PATH_ORIGINAL_IMAGES",PATH."view/images/tutorialImagesOriginal/".$tutorialData['id_tutorial'].DIRECTORY_SEPARATOR);
        define("TUTORIAL_LINK_ORIGINAL_IMAGES",siteURL."images/tutorialImagesOriginal/".$tutorialData['id_tutorial'].DIRECTORY_SEPARATOR);
        echo "<h2>".$tutorialData['nome']."</h2><hr>";
        $i=1;
        include_once PATH."view/tutoriais/".$tutorial.".php";
        unlink(TUTORIAL_PATH_TO_GENERATE);
        $this->gerarEstatistica($log);

    }
    public function checkDomain($domain){
        set_time_limit(1);
        $fp=fsockopen("mbox.".$domain,143,$error,$errno,1);
        unset($error,$errno);
        if($fp){
            fclose($fp);
            return true;
        }
        else{
            return false;
        }

    }
    public function gerarEstatistica($idLog){
        ?>
        <div class="utilidade-tutorial">
            <div class="well ">
                <p>Este tutorial lhe foi útil ?</p>

                <form onsubmit="return false" class="form-inline">
                    <label><input type="radio" name="util" value="true"> Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <label><input type="radio" name="util" value="false"> Não</label>
                    <input type="hidden" name="log" value="<?= MD5($idLog);?>">
                </form>
            </div>
        </div>
        <?
    }
    public function logIt($email,$tutorial){
        $this->connect();
        $email=addslashes($email);
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR'];
        $this->query("INSERT INTO ".$this->PREFIXO."log(email,tutorial,data_hora,IP) VALUES('$email',$tutorial,NOW(),'$ip')");
        $log=$this->query("SELECT @@IDENTITY");
        $this->close();
        return $log=current($log->fetch_row());
    }
    public function analyticIt($log,$f){
        $f=$f?1:0;
        $log=addslashes($log);
        $this->connect();
        $res=$this->query("SELECT id_log FROM ".$this->PREFIXO."log WHERE MD5(id_log) like '$log'");
        $this->close();
        if($res->num_rows==1){
            $log=current($res->fetch_row());
            $this->connect();
            $this->query("INSERT INTO ".$this->PREFIXO."analytics(id_log,funcionou) VALUES($log,$f)");
            $this->close();
            return true;
        }
        return false;
    }
}