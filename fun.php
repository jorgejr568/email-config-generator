<?php

/**
 * Created by PhpStorm.
 * User: jorge-jr
 * Date: 19/09/15
 * Time: 17:43
 */
class fun
{
    public function getDefines(){
        define("FTPPATH","novo/config.email/");
    }
    private $DBHOST="mysql1.prv.f1.k8.com.br";
    private $DBUSER="hostnet_site2";
    private $DBPASS="ht*nt2014%bd&07";
    private $DBNAME="hostnet_site2";

    private $FTPHOST="web15.prv.f1.k8.com.br";
    private $FTPUSER="hostnet_site";
    private $FTPPASS="hstnt*77site";

    private $banco;
public function menu(){
    if(isset($_SESSION['login_tutorial_hostnet'])) {
        ?>

        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="index" title='Idealizado por Higor Vitorino | Desenvolvido por Jorge Junior'>Tutoriais</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index">Home</a></li>
                    <li class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Ferramentas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="coordenadas" target="_blank">Coordenadas de imagem</a></li>
                            <li><a href="http://www.photoshoponline.com.br/editor/" target="_blank">Editor de
                                    imagens</a></li>
                            <li><a href="http://webresizer.com/resizer/" target="_blank">Image resizer</a></li>
                            <li><a href="file_uploader">Enviar imagens</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Gest&atilde;o <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="verificar_tutoriais" >Gerenciar tutoriais</a></li>
                            <?php
                            if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN') {
                                $this->conectaMysqli();
                                $res=$this->executaSQL("SELECT COUNT(*) FROM SYS_sugestoes WHERE status not like 'VERIFICADO'");
                                $res2=$this->executaSQL("SELECT COUNT(*) FROM SYS_movimentacoes");

                                $qtd[0]=mysqli_fetch_array($res);
                                $qtd[1]=mysqli_fetch_array($res2);

                                $this->fechaMysqli();
                                unset($res,$res2);
                                ?>
                                <li><a href="verificar_sugestoes">Verificar sugest&otilde;es <span class="btn badge" style='background-color: #3498DB;color: white;'><?php echo $qtd[0][0];?></span></a></li>
                                <li><a href="notificacoes">Notifica&ccedil;&otilde;es <span class="btn badge" style='background-color: #3498DB;color: white;'><?php echo $qtd[1][0];unset($qtd);?></span></a></li>

                                <?php
                            }
                            ?>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Outros programas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://jorgejunior.x-br.com/Comandos/comandos_para_terminal/" target="_blank">Comandos
                                    para terminal</a></li>
                            <li><a href="http://respostasprontas.tk" target="_blank">Respostas Prontas</a></li>
                            <li><a href="http://cgtp.tk" target="_blank">Gerar texto periodicidade</a></li>

                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
<li class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Conta <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout">Sair</a></li>
                            <li><a href="cadastro">Cadastro</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <?php
    }
    else{
        ?>
        <a href="https://www.hostnet.com.br/config.email/" ><img src="https://www.hostnet.com.br/wiki/skins/common/images/logo_hostnet_ori.png" title='Idealizado por Higor Vitorino | Desenvolvido por Jorge Junior' style="height: 108px;width: 108px;" data-placement='right'></a>
        <nav class="navbar navbar-default hidden" >
            <div class="navbar-header">
                <a class="navbar-brand" href="index" >Tutoriais</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index">Home</a></li>
                    <li><a href="sugestoes">Enviar Sugest&atilde;o</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
        </nav>

        <?php
    }
    ?>
     <script>
        $(document).ready(function(){
        $('div *').tooltip();
        $('#tutorial_chosen').attr('title','Selecione o tutorial');
    });
        </script>
    <?php
}
    public function verificarUserSaida(){
        if(isset($_SESSION['login_tutorial_hostnet'])){
            return true;
        }
        else{
            return false;
        }
    }
    public function event(){

        if (isset($_SESSION['msg']) && isset($_SESSION['cor'])) {
            $class=null;
            if($_SESSION['cor']=='red'){
                $class='alert-danger';
                $span='glyphicon glyphicon-exclamation-sign';
            }
            else{
                $class='alert-success';
                $span='glyphicon glyphicon-ok';
            }
            echo "<div class='alert fade in $class'><span class='$span'></span> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" . $_SESSION['msg'] . "</div>";
            unset($_SESSION['msg']);
            unset($_SESSION['cor']);

        }
    }
    public function headers(){
        /*CDN do bootstrap padrão
         *<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
         * <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
         */

        ?>
        <link rel="icon" type="image/png" href="https://www.hostnet.com.br/wiki/skins/common/images/logo_hostnet_ori.png">
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="chosen.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            
        <style type="text/css" media="all">
            /* fix rtl for demo */
            .chosen-rtl .chosen-drop { left: -9000px;}
            pre {
                white-space: pre-wrap;       /* CSS 3 */
                white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
                white-space: pre-wrap;      /* Opera 4-6 */
                white-space: -o-pre-wrap;    /* Opera 7 */
                word-wrap: normal;        /* Internet Explorer 5.5+ */
                font-family: "Helvetica",sans-serif;
            }
            ul{list-style-type: none;
            ul li{
                list-style-type: none;
                padding: 0px;
                margin: 0px;
            }
            .modal-title{
            color: #111;
            }
            .menu{
            text-align: center;	
            }

        </style>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-62630927-5', 'auto');
            ga('send', 'pageview');

        </script>
        <?php

    }
    function saiDaqui(){
        $_SESSION['msg']='Você não está autorizado a utilizar esta página.';
        $_SESSION['cor']='red';
        header("Location: index");
    }
    function  conectaMysqli(){
    $this->banco=mysqli_connect($this->DBHOST,$this->DBUSER,$this->DBPASS,$this->DBNAME);


    }
    function conectaFTP(){
        return ftp_connect($this->FTPHOST);
    }
    function logarFTP($ftp){
        ftp_login($ftp,$this->FTPUSER,$this->FTPPASS);
    }
    function executaSQL($sql){
        $res=mysqli_query($this->banco,$sql);
        return $res;
    }
    function fechaMysqli(){
        mysqli_close($this->banco);
    
    }
    function affected_rows(){
        return mysqli_affected_rows($this->banco);
    }

}

