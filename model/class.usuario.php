<?php

/**
 * Autor: Jorge Junior
 * Data: 23/03/16
 * Hora: 14:40
 */
require_once PATH."model/class.conexao.php";
class usuario extends conexao
{
    private $userID;
    public function __construct($id_user){
        $this->userID=$id_user;
    }
    public function isLoged(){
        /*$this->connect();
        $res=$this->query("SELECT id_usuario FROM ".$this->PREFIXO."users WHERE id_usuario=".$this->userID);
        $this->close();
        if($res->num_rows==1){
            return true;
        }
        else{
            return false;
        }
        */
        return false;
    }
}