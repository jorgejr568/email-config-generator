<?php
session_start();
if(session_destroy()){
    session_start();
    $_SESSION['msg']='Logout realizado com sucesso';
    $_SESSION['cor']='green';
}
header("Location: index");