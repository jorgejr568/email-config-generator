<?php

/**
 * Autor: Jorge Junior
 * Data: 22/03/16
 * Hora: 19:43
 */
class conexao extends mysqli
{
    private $DBHOST="localhost";
    private $DBUSER="root";
    private $DBPASS="root";
    private $DBNAME="hostnet_site2";
    protected $PREFIXO="CE_";
    private $DBDEBUG=true;
    public function connect(){
        parent::__construct($this->DBHOST,$this->DBUSER,$this->DBPASS,$this->DBNAME);
        if(mysqli_connect_error()){
            die("Erro ao se conectar com o banco de dados.". mysqli_connect_error());
        }
        if(!$this->set_charset('utf8')){
            die("Erro ao utilizar UTF-8.".$this->error);
        }
    }
    public function query($sql){
        $res=parent::query($sql);
        if($this->DBDEBUG) {
            if ($res) {
                return $res;
            } else {
                die("Erro na query $sql<br>Erro: " . $this->error);
            }
        }
        else{
            return $res;
        }
    }
    public function fetch_all($res){
        $row=null;
        for($i=0;$i<mysqli_num_rows($res);$i++){
            $row[]=mysqli_fetch_array($res);
        }
        return $row;
    }
}