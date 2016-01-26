<?php

session_start();
require_once 'fun.php';
$fun=new fun();
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {$mobile=true;}
else{
    $mobile=false;}
?>
<!doctype html>
<html lang="PT-BR">
<head>
    <title>Tutoriais</title>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

    <?php
    $fun->headers();
    ?>
</head>
<script type="text/javascript">
    function sendOpniao(opniao){
        var email=document.getElementById('email_util').value;
        var tutorial=document.getElementById('tutorial_util').value;
        var ajax=loadAjax();
        ajax.open("POST",'trata_incluir_opniao',true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        ajax.onreadystatechange=function (){
            if(ajax.readyState==4){
                document.getElementById('div_util').innerHTML=ajax.responseText;
                if(opniao=='sim'){
                    document.getElementById('div_util').className='alert alert-success';
                }
                else{
                    window.location.href='sugestoes';
                }
            }
        }
        ajax.send('email='+email+'&tutorial='+tutorial+'&util='+opniao);

    }
    function loadAjax(){
        var ajax;
        if(window.XMLHttpRequest){
            ajax=new XMLHttpRequest();
        }
        else if(window.ActiveXObject){
            ajax=new ActiveXObject('Msxm12.XMLHTTP');
            if(!ajax){
                ajax=new ActiveXObject('Microsoft.XMLHTTP');
            }
        }
        return ajax;
    }
    
</script>
<body>
<div class="container-fluid">
    <div class="row" >
        <div class="col-md-12 menu" style="text-align: center;margin-bottom: 5px;">
            <?php
            $fun->menu();

            ?>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10 content" style='margin-top: 30px;'>
            <form action="#Tutorial">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $fun->event();

                        ?>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                                <label for="tutorial" class="control-label" title='Selecione o programa de e-mail' data-placement="bottom" >Selecione o programa de e-mail: </label>
                            </div>
                            <div class="col-md-5">
                                <select class='chosen-select form-control' data-placeholder="Selecione o programa de e-mail" name='tutorial' id="tutorial" >
                                    <option value=""></option>
                                    <?php


                                    $fun->conectaMysqli();

                                    if($mobile){
                                        $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE status in('OK','VERIFICANDO') ORDER by grupo");
                                        if (isset($_GET['tutorial'])) {

                                            for ($j = 0; $j < mysqli_num_rows($res); $j++) {

                                                $linha = mysqli_fetch_array($res);
                                                if ($linha[0] == $_GET['tutorial']) {
                                                    echo "<option selected value='$linha[0]'>$linha[0]</option>";
                                                } else {
                                                    echo "<option value='$linha[0]'>$linha[0]</option>";
                                                }
                                            }
                                        }
                                        else{
                                            for ($j = 0; $j < mysqli_num_rows($res); $j++) {

                                                $linha = mysqli_fetch_array($res);

                                                echo "<option value='$linha[0]'>$linha[0]</option>";

                                            }
                                        }
                                    }
                                    else {
                                        $res2 = $fun->executaSQL("SELECT * FROM SYS_grupos ORDER BY id_grupo");
                                        if (isset($_GET['tutorial'])) {
                                            for ($i = 0; $i < mysqli_num_rows($res2); $i++) {
                                                $linha2 = mysqli_fetch_array($res2);
                                                echo "<optgroup label='$linha2[0]'>";
                                                $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE grupo=$linha2[1] and status in('OK','VERIFICANDO')");
                                                for ($j = 0; $j < mysqli_num_rows($res); $j++) {

                                                    $linha = mysqli_fetch_array($res);
                                                    if ($linha[0] == $_GET['tutorial']) {
                                                        echo "<option selected value='$linha[0]'>$linha[0]</option>";
                                                    } else {
                                                        echo "<option value='$linha[0]'>$linha[0]</option>";
                                                    }
                                                }
                                                echo "</optgroup>";
                                            }
                                        } else {
                                            for ($i = 0; $i < mysqli_num_rows($res2); $i++) {
                                                $linha2 = mysqli_fetch_array($res2);
                                                echo "<optgroup label='$linha2[0]'>";
                                                $res = $fun->executaSQL("SELECT * FROM SYS_tutoriais WHERE grupo=$linha2[1] and status in('OK','VERIFICANDO')");
                                                for ($j = 0; $j < mysqli_num_rows($res); $j++) {

                                                    $linha = mysqli_fetch_array($res);
                                                    echo "<option value='$linha[0]'>$linha[0]</option>";
                                                }
                                                echo "</optgroup>";
                                            }

                                        }
                                    }

                                    ?>
                                </select>

                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>



                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                                <label for="email" class="control-label" title='Digite seu e-mail' data-placement="bottom">Digite seu e-mail: </label>
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope" style="position: relative;top: 0px;"></span><input type="email" placeholder="Digite seu e-mail" id="email" name="email" class="form-control" value="<?php echo strtolower($_GET['email']);?>">
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <input type="submit" value="Verificar tutorial" class="btn btn-block" style="background-color: #31358f;color: white" >

                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>

                </div>
            </form>
            <div class="col-md-1">
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-1"></div>
                <div class="col-md-10" >
                    <?php
                    if(isset($_GET['tutorial']) && isset($_GET['email'])){
                        if(!empty($_GET['tutorial']) && !empty($_GET['email'])){
                            if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {

                                ?>
                                <div class="alert alert-danger fade in"><span class="glyphicon glyphicon-exclamation-sign"></span> <a data-dismiss="alert" class="close">&times;</a> E-mail invalido.</div>

                                <?php
                            }
                            else{
                                $email=strtolower($_GET['email']);
                                $mail=str_replace('@', '', str_replace('.','', $email));
                                $email_explode=explode('@',$email);
                                $nome_conta=ucwords(str_replace('.',' ',str_replace('_',' ',$email_explode[0])));
                                $i=1;
                                set_time_limit(1);
                                $fp = fsockopen ("mbox.$email_explode[1]", 143, $errno, $errstr, 0.3);
                                unset($errno,$errstr);
                                if ($fp) {
                                    fclose($fp);

                                    $res = $fun->executaSQL("SELECT nome,arq FROM SYS_tutoriais WHERE nome like '" . $_GET['tutorial'] . "'");
                                    if (mysqli_num_rows($res) == 1) {
                                        $linha = mysqli_fetch_array($res);
                                        $fun->executaSQL('UPDATE SYS_tutoriais SET qtd_acessos=qtd_acessos+1 WHERE nome like "' . $linha['nome'] . '"');
                                        $fun->executaSQL("INSERT INTO SYS_movimentacoes(movimentacao) VALUES ('".$email." acessou o tutorial \"".$linha['nome']."\"')");

                                        function IMG($url)
                                        {
                                            echo "<a href='$url' data-lightbox='imagem-data'><img src='$url'/></a><br /><br />";
                                        }

                                        echo "<h2 id='Tutorial'>" . $linha[0] . "</h2><hr><link rel='stylesheet' href='css/lightbox.css'>";


                                        if ($mobile) {
                                            echo "<style type='text/css'>img,.imgs33{width: 100%;}.imgs33 img{width: 33.3%;}</style>";
                                        }
                                        define("PATH",'tutoriais'.DIRECTORY_SEPARATOR.$linha[0].DIRECTORY_SEPARATOR);

                                        require_once "$linha[1]";
                                        ?>
                                        <div class="col-md-12 well" id='div_util'>
                <p>Este tutorial lhe foi útil ? </p>
                <form action="trata_incluir_opniao" method="post">
                <input type="hidden" value="<?php echo $email;?>" name='email' id='email_util'>
                <input type="hidden" value="<?php echo $_GET['tutorial'];?>" name='tutorial' id='tutorial_util'>


                <label for='utilidadeSIM' class="radio-inline"><input type="radio" value="sim" name="util" id='utilidadeSIM' onchange="sendOpniao(this.value)"> Sim</label>
                <label for='utilidadeNAO' class="radio-inline"><input type="radio" value="nao" name="util" id='utilidadeNAO' onchange="sendOpniao(this.value)"> Não</label>
            
                </div>
                                        <?php


                                    } else {
                                        ?>
                                        <div class="alert alert-danger fade in"><span class="glyphicon glyphicon-exclamation-sign"></span><a data-dismiss="alert" class="close">&times;</a> Tutorial não
                                            encontrado.
                                        </div>

                                        <?php
                                    }
                                }
                                else{
                                    $ext=end(explode('.',$email_explode[1]));
                                   
                                    switch($ext){
                                        case 'br':
                                            $link='https://registro.br/cgi-bin/whois/?qr='.$email_explode[1];
                                            break;
                                        case 'rio':
                                            $link='http://whois.nic.rio/';
                                            break;
                                        default:
                                            $link='http://reports.internic.net/cgi/whois?whois_nic='.$email_explode[1].'&type=domain';
                                    }
                                    unset($ext);
                                    ?>
                                    <div class="alert alert-danger fade in"><span class="glyphicon glyphicon-exclamation-sign"></span> <a data-dismiss="alert" class="close">&times;</a>Ocorreu um erro de DNS. Prováveis motivos:
                                        <ol><li><a href="<?php echo $link;?>" style="color: #FFF;" target="_blank">Seu domínio não está registrado</a></li>
                                            <li><a href="<?php echo $link;?>" style="color: #FFF;" target="_blank">Seu domínio está registrado, porém seus DNS não apontam para a Hostnet</a></li>
                                            <li><a href="http://www.hostnet.com.br/wiki/index.php/DNS#Propaga.C3.A7.C3.A3o_de_DNS:" style="color: #FFF;" target="_blank">Houve uma alteração recente de DNS, e a propagação ainda não foi feita</a></li>
                                        </ol>
                                        Para mais detalhes, entre em contato conosco via <a href="https://painel.hostnet.com.br/helpdesk" style='color: #FFF;'>HelpDesk</a>.
                                    </div>
                                    <?php
                                    unset($link);
                                }
                            }
                        }
                        else{
                            ?>
                            <div class="alert alert-danger fade in"><span class="glyphicon glyphicon-exclamation-sign"></span> <a data-dismiss="alert" class="close">&times;</a>Esqueceu-se de preecher algum campo.</div>
                            <?php
                        }
                    }
                    $fun->fechaMysqli();
                    ?>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

</div>
<script src="chosen.jquery.js" type="text/javascript"></script>
<script src="prism.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    function reload(){var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Nada foi encontrado'}
    }
        $(".chosen-select").chosen({no_results_text: "Nenhum resultado para "});
        $(".chosen-select").chosen({allow_single_deselect:true});


        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }}
    reload();
</script>
</body>
<?php
if(!empty($_GET['tutorial']) && !empty($_GET['email'])){
    ?>
    <script src="js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'alwaysShowNavOnTouchDevices': true,
            'showImageNumberLabel': false
        })
    </script>
    <?php
}
?>



</html>


