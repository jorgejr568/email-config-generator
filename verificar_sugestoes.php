<?php
session_start();
require_once 'fun.php';
$fun=new fun();
$useragent=$_SERVER['HTTP_USER_AGENT'];
if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {$mobile=true;}
else{
    $mobile=false;}
?>
    <!doctype html>
    <html lang="PT-BR">
    <head>
        <title>Verificar sugest&otilde;es</title>
        <?php
        $fun->headers();
        ?>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"><?php $fun->menu();?></div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            <h2 class="title">Verificar sugest&otilde;es</h2><hr>
                <?php
                $fun->event();
                $fun->conectaMysqli();
                ?>
                <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped table-responsive">
                    <thead>
                                            <tr><th colspan="5" style='text-align: center'>N&atilde;o verificados</th></tr>

                    <tr>
                        <th>Assunto</th>
                        <th>Status</th>
                        <th>E-mail</th>
                        <th>Data</th>
                        <th>A&ccedil;&otilde;es</th>
                    </tr>
                    </thead>
                <tbody>
                <?php $res=$fun->executaSQL("SELECT * FROM SYS_sugestoes WHERE status not like 'VERIFICADO' ORDER BY id DESC");
                for($i=0;$i<mysqli_num_rows($res);$i++){
                    $sugestao=mysqli_fetch_array($res);?>
                    <tr>
                        <td><?php echo $sugestao['assunto'];?></td>
                        <td><?php echo $sugestao['status'];?></td>
                        <td><?php echo $sugestao['email'];?></td>
                        <td><?php echo $sugestao['data'];?></td>
                        <td style="padding: 0"><a href="#" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal<?php echo MD5($sugestao['id']);?>">A&ccedil;&otilde;es</a></td>
                        <div class="modal fade" id="modal<?php echo MD5($sugestao['id']);?>" role="dialog">
                            <div class="modal-dialog" <?php if(!$mobile) echo "style='width: 70%'";?>>

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $sugestao['assunto'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <blockquote>
                                            <pre><?php echo $sugestao['sugestao'];?></pre>
                                            <cite><small><?php echo $sugestao['email']?></small></cite>
                                            <cite><small><?php echo $sugestao['data'];?></small></cite>
                                        </blockquote>

                                        <div style="border: 1px dashed #ccc;padding: 10px;">
                                        <form action="alterar_depoimento" method="GET">
                                            <div class="form-group">
                                                <label for="" class="control-label">Status: </label>
                                                <input type="hidden" name="sugestao" value="<?php echo MD5($sugestao['id']);?>">
                                                <input type="hidden" name="acao" value="ALTERAR_STATUS">
                                                <input type="text" name='status' onkeyup="this.value=this.value.toUpperCase();" class="form-control" value="<?php echo $sugestao['status'];?>">
                                            </div>
                                            <input type="submit" value="Atualizar status" class="btn btn-success">
                                        </form>
                                        </div>
                                        <a style="margin: 10px;" class="btn btn-danger" href="alterar_depoimento?acao=REMOVER&sugestao=<?php echo MD5($sugestao['id']);?>">Excluir sugest&atilde;o</a>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </tr>

                <?php
                }

                ?>

                </tbody>

                    </table>
                </div>
                <div class="table-responsive">

                <table class="table table-hover table-bordered table-striped table-responsive">
                    <thead>
                        <tr><th colspan="5" style='text-align: center'>Verificados</th></tr>

                    <tr>
                        <th>Assunto</th>
                        <th>Status</th>
                        <th>E-mail</th>
                        <th>Data</th>
                        <th>A&ccedil;&otilde;es</th>
                    </tr>
                    </thead>
                <tbody>
                <?php
                $res=$fun->executaSQL("SELECT * FROM SYS_sugestoes WHERE status like 'VERIFICADO' ORDER BY id DESC");
                for($i=0;$i<mysqli_num_rows($res);$i++){
                    $sugestao=mysqli_fetch_array($res);?>
                    <tr class="info">
                        <td><?php echo $sugestao['assunto'];?></td>
                        <td><?php echo $sugestao['status'];?></td>
                        <td><?php echo $sugestao['email'];?></td>
                        <td><?php echo $sugestao['data'];?></td>
                        <td style="padding: 0"><a href="#" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal<?php echo MD5($sugestao['id']);?>">A&ccedil;&otilde;es</a></td>
                        <div class="modal fade" id="modal<?php echo MD5($sugestao['id']);?>" role="dialog">
                            <div class="modal-dialog" <?php if(!$mobile) echo "style='width: 70%'";?>>

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $sugestao['assunto'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <blockquote>
                                            <pre><?php echo $sugestao['sugestao'];?></pre>
                                            <cite><small><?php echo $sugestao['email']?></small></cite>
                                            <cite><small><?php echo $sugestao['data'];?></small></cite>
                                        </blockquote>

                                        <div style="border: 1px dashed #ccc;padding: 10px;">
                                        <form action="alterar_depoimento" method="GET">
                                            <div class="form-group">
                                                <label for="" class="control-label">Status: </label>
                                                <input type="hidden" name="sugestao" value="<?php echo MD5($sugestao['id']);?>">
                                                <input type="hidden" name="acao" value="ALTERAR_STATUS">
                                                <input type="text" name='status' onkeyup="this.value=this.value.toUpperCase();" class="form-control" value="<?php echo $sugestao['status'];?>">
                                            </div>
                                            <input type="submit" value="Atualizar status" class="btn btn-success">
                                        </form>
                                        </div>
                                        <a style="margin: 10px;" class="btn btn-danger" href="alterar_depoimento?acao=REMOVER&sugestao=<?php echo MD5($sugestao['id']);?>">Excluir sugest&atilde;o</a>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </tr>
                <?php
                }
                $fun->fechaMysqli();
                ?>
                </tbody>
                </table>
                    </div>
            </div>



        <div class="col-md-1"></div>
    </div>
    </div>
    </body>
    </html>
    <?php
}

else {
    $fun->saiDaqui();
}
?>
