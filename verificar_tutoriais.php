<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()){
?>
    <!doctype html>
    <html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Verificar tutoriais</title>
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
                        <h2 class="title">Gerenciar tutoriais</h2><hr>

                <?php
                $fun->event();
                ?>
                <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>
                                Nome
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Quantidade de acessos
                            </th>
                            <th>
                                Grupo
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $fun->conectaMysqli();
                    $res=$fun->executaSQL('SELECT * FROM SYS_tutoriais WHERE 1 ORDER BY qtd_acessos DESC');
                    for($i=0;$i<mysqli_num_rows($res);$i++){
                        $tutorial=mysqli_fetch_array($res);
                        $res2=$fun->executaSQL("SELECT nome from SYS_grupos WHERE id_grupo =".$tutorial['grupo']);
                        $grupo=mysqli_fetch_array($res2);
                        if($tutorial['status']=='DELETAR'){
                        }
                    elseif($tutorial['status']=='ERRO'){
                        $class='class="danger"';
                    }
                    switch($tutorial['status']){
                        case 'DELETAR':
                            $class='class="danger"';
                            break;
                        case 'ERRO':
                            $class='class="danger"';
                            break;
                        case 'VERIFICANDO':
                            $class='class="warning"';
                            break;
                        case 'A VERIFICAR':
                            $class='class="success"';
                            break;

                    }

                        ?>
                        <tr <?php echo $class;unset($class);?>>
                            <td>
                                <?php echo $tutorial['nome'];?>
                            </td>
                            <td>
                                <?php echo $tutorial['status'];?>
                            </td>
                            <td>
                                <?php echo $tutorial['qtd_acessos'];?>
                            </td>
                            <td>
                                <?php echo $grupo[0];?>
                            </td>
                            <td>
                                <?php if($tutorial['status']=='OK' or $_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){?>
                                <a href="editar?t=<?php echo MD5($tutorial['nome']);?>"><img src="images/editar.png" style="width: 20px;height: 20px;" alt="Editar" title="Editar tutorial"></a>
                                <?php }?>

                                <?php if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){?>

                                <a href="#" data-toggle="modal" data-target="#modal<?php echo MD5($tutorial['nome']);?>"><img src="images/alterar_status.png" title="Alterar status e grupo" style="width: 20px;height: 20px;"></a>
                                <div class="modal fade" id="modal<?php echo MD5($tutorial['nome']);?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="color: #2c3e50">Alterar status e grupo de "<?php echo $tutorial['nome'];?>"</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="alterar_status_tutorial" method="POST">
                                                    <input type="hidden" id="t" name="t" value="<?php echo MD5($tutorial['nome']);?>">
                                                    <div class="form-group">
                                                        <label class="control-label">Status:</label>
                                                        <input type="text" value="<?php echo $tutorial['status'];?>" name="status" class="form-control" onkeyup="this.value=this.value.toUpperCase();">

                                                    </div>
                                                    <div class="form-group">

                                                        <label class="control-label">Categoria:</label>
                                                        <select class="form-control" name="grupo">
                                                            <?php
                                                            $res3 = $fun->executaSQL("SELECT * FROM SYS_grupos");
                                                            for ($j = 0; $j < mysqli_num_rows($res3); $j++) {
                                                                $linha2 = mysqli_fetch_array($res3);
                                                                if($linha2[0]==$grupo[0]){echo "<option selected value='$linha2[1]'>$linha2[0]</option>";}
                                                                else{echo "<option value='$linha2[1]'>$linha2[0]</option>";}
                                                            }
                                                            unset($res3, $linha3);
                                                            ?>
                                                        </select>

                                                    </div>
                                                    <p style="width: 100%;text-align: right"><input type="submit" value="Alterar status e grupo" class="btn btn-success"></p>
                                                </form>
                                                    <hr>
                                                    <h4 class="modal-title" style="color: #2c3e50">Estat&iacute;sticas</h4>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Funcionou</td>
                                                                <td><?php $res3=$fun->executaSQL("SELECT COUNT(*) FROM SYS_analytics WHERE tutorial like '".$tutorial['nome']."' and funcionou=1");$funcionou=mysqli_fetch_array($res3);echo $funcionou[0];unset($res3,$funcionou);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>N&atilde;o funcionou</td>
                                                                <td><?php $res3=$fun->executaSQL("SELECT COUNT(*) FROM SYS_analytics WHERE tutorial like '".$tutorial['nome']."' and funcionou=0");$funcionou=mysqli_fetch_array($res3);echo $funcionou[0];unset($res3);?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <?php if($funcionou[0]>0){?>
                                                    <table class="table table-hover">
                                                    <thead>
                                                        <tr class='danger'>
                                                            <th colspan="2" style="text-align: center;">Lista dos que n&atilde;o funcionaram</th>

                                                        </tr>
                                                        <tr>
                                                            <th>E-mail</th>
                                                            <th>Apagar</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                        <tbody>
                                                        <?php $res3=$fun->executaSQL("SELECT email,id FROM SYS_analytics WHERE tutorial like '".$tutorial['nome']."' and funcionou=0");$funcionou_email=mysqli_fetch_array($res3);
                                                            for($j=0;$j<mysqli_num_rows($res3);$j++){
                                                                ?>
                                                                <tr><td><?php echo $funcionou_email[0];?></td>
                                                                <td><a href="apagar_nao_funcionou?id=<?php echo MD5($funcionou_email[1]);?>"><span class='close' style='float: left'>&times;</span></td></tr>

                                                                <?php
                                                            }
                                                        ?>
                                                            
                                                        </tbody>
                                                    </table>
                                                    <?php }unset($funcionou[0]);?>

                                                </div>
                                                <div class="modal-footer">
                                                    <a href="reset_qtd?t=<?php echo MD5($tutorial['nome']);?>" class="btn btn-warning">Resetar contador</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
            </div>
            <!-- Modal -->

                                <?php
                                if($tutorial['status']=='VERIFICANDO'){
                                    ?>
                                    <a href="aprovar_editar_tutorial?t=<?php echo MD5($tutorial['nome']);?>"><img src="images/ver_editado.png" style="width: 20px;height: 20px;" alt="Verificar tutorial editado" title="Verificar tutorial editado"></a>
                                    <?php
                                }
                                elseif($tutorial['status']=='A VERIFICAR'){
                                    ?>
                                    <a href="aprovar_incluir_tutorial?t=<?php echo MD5($tutorial['nome']);?>"><img src="images/aprovar_tutorial.png" style="width: 20px;height: 20px;" alt="Aprovar tutorial incluído" title="Aprovar tutorial incluído"></a>

                                    <?php
                                }
                                }?>
                            </td>
                        </tr>
                    <?php
                    }
                                                    $fun->fechaMysqli();

                    ?>
                    </tbody>
                </table>
            </div>
            </div>
            <div class="col-md-1"><a href='incluir_tutorial' class="btn btn-default" style="position: fixed">Incluir tutorial</a></div>
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
