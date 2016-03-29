<?php

/**
 * Autor: Jorge Junior
 * Data: 23/03/16
 * Hora: 15:51
 */
class ftp
{
    private $FTPHOST="web15.prv.f1.k8.com.br";
    private $FTPUSER="hostnet_site";
    private $FTPPASS="hstnt*77site";
    private $FTPPATH="novo/config.email/";
    private $FTP=null;
    public function connect(){
        $this->FTP=ftp_connect($this->FTPHOST);
        if($this->FTP){
            die("Erro ao se conectar com o FTP.");
        }
        if(ftp_login($this->FTP,$this->FTPUSER,$this->FTPPASS)){
            die("Erro ao se logar no FTP.");
        }
        return true;
    }

}