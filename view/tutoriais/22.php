<style type="text/css">
    .imgs33 img{
        display: inline-block;
    }
    .imgs33{
        width: 100%;
    }
</style>

<p>Veja como é configurar seus e-mails personalizados da Hostnet  no Windows Phone. Siga os procedimentos abaixo:
</p><p><br />
    <strong>1:</strong> Em seu parelho  clique em <b>Iniciar</b> logo após em <b>Aplicativos</b>, selecione  Configurações.
</p><?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."IMG1.png");?><p><br />
    <p><strong>2: </strong> Clique em email+contas.</p><br>
<?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."IMG2.png");?><p>
    <strong>3:</strong> Clique em  Adicionar uma <b>Conta.</b>.<br>
</p><?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."IMG3.png");?><p><br />
    <p><strong>4:</strong> Clique em configuração avançada</p><br>
<?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."IMG4.png");?>    <p><strong>5:</strong> Digite seu  endereço de e-mail e senha:
</p>
<p>
<ul><li><b> E-mail: </b><?php echo EMAIL_CLI;?>
    </li></ul>
<ul><li> <b>Senha:</b> Corresponde à senha da sua conta de email.
    </li></ul>
Logo após clique em <b>Próximo</b></p><br>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG5.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,123,EMAIL_CLI,$preto);
    imagestring($imagem,5,24,201,'**********',$preto);

    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?><p><br />

</p>
<p><br />
    <strong>6:</strong> Selecione a opção <b>Webmail</b>.</p>
<?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."IMG6.png");?>
<p><br />
    <strong>7 : </strong> Especifique  as seguintes informações:
</p><p>
<ul><li><strong>Nome da conta:</strong>   <?php echo EMAIL_CLI;?>
    </li></ul>
<ul><li><strong>Seu nome:</strong> <?php echo NOME_CONTA;?>
    </li></ul>
<ul><li><strong>Servidor de email de entrada:</strong> mbox.<?php echo DOMINIO_CLI;?>
    </li></ul>
<ul><li><strong>Tipo de conta:</strong>   IMAP4.
    </li></ul>
<ul><li><strong>Nome de usuário:</strong> <?php echo USUARIO_CONTA;?>
    </li></ul>
<ul><li><strong>Senha:</strong>   Corresponde à senha da sua conta de email.
    </li></ul>
<ul><li><strong>Servidor de email de saída (SMTP):</strong> smtp.<?php echo DOMINIO_CLI;?>
    </li></ul></p>
<div class="imgs33" style='width: 100%'>
<?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG7.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,123,EMAIL_CLI,$preto);
    imagestring($imagem,5,24,219,NOME_CONTA,$preto);
    imagestring($imagem,5,24,374,'mbox.'.DOMINIO_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());

    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG8.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,150,USUARIO_CONTA,$preto);
    imagestring($imagem,5,24,442,'smtp.'.DOMINIO_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());

    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG9.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,181,'smtp.'.DOMINIO_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</div>
<p><br />
</p><p><strong>8:</strong> Selecione <b>Entrar</b>.  Pronto! Sua conta de e-mail foi cadastrada com sucesso.
</p><p><br />
    <strong> * As instruções acima podem ser utilizadas nas versões do dispositivos Windows Phone 7, Windows Phone 7.5 e Windows Phone 8.</strong>
</p>