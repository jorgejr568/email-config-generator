<p>Para configurar uma nova conta de e-mail no Microsoft Outlook 2013 clique em <b>File (Arquivo)</b>,
</p><p><br />
                            <?php image("http://wiki.hostnet.com.br/images/2/28/O2013.png")?>

</p><p><br />
    Clique em <b> Account Setings (Configurações de Conta)</b>.
</p><p><br />
                            <?php image("http://wiki.hostnet.com.br/images/5/54/O2013-1.png")?>

</p><p><br />
    Na guia <b>Email</b>, clique no botão <b>New..(Novo...)</b>.
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img1.png');
    $preto=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem,2,41,161,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
image(getBase64FromGeneration());
    ?>
</p><p><br />
    Marque a opção <b>Manual setup or additinal server types (Definir manualmente as configurações do servidor ou tipos de servidor adicionais)</b> e clique no botão <b>Next (Avançar)</b>.
</p><p><br />
                            <?php image("http://wiki.hostnet.com.br/images/8/8a/O2013-3.png")?>

</p><p><br />
    Selecione a opção <b>POP or IMAP (POP ou IMAP)</b> e clique no botão <b>Next (Avançar)</b>.
</p><p><br />
                            <?php image("http://wiki.hostnet.com.br/images/1/12/O2013-5.png")?>

</p><p><br />
    Preencha os campos:
</p><p><br />
       <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img2.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,170,100,NOME_CONTA,$preto);
    imagestring($imagem,2,170,123,EMAIL_CLI,$preto);
    imagestring($imagem,2,170,197,'mbox.'.DOMINIO_CLI,$preto);
    imagestring($imagem,2,170,221,'smtp.'.DOMINIO_CLI,$preto);
    imagestring($imagem,2,170,271,USUARIO_CONTA,$preto);
    imagestring($imagem,2,170,295,'*******',$preto);
    imagepng($imagem,PATH.TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
image(getBase64FromGeneration());
    $i++;
    ?>
</p><p><br />
</p>
<ul><li> <b>Nome</b>: <?php echo NOME_CONTA;?>
    </li><li> <b>Endereço de e-mail</b>: <?php echo EMAIL_CLI;?>
    </li><li> <b>Tipo de conta</b>: IMAP
    </li><li> <b>Servidor de entrada de emails</b>: mbox.<?php echo DOMINIO_CLI;?>
    </li><li> <b>Servidor de saída de emails (SMTP)</b>: smtp.<?php echo DOMINIO_CLI;?>
    </li><li> <b>Nome de usuário</b>: <?php echo USUARIO_CONTA;?>
    </li><li> <b>Senha</b>: a senha do e-mail
    </li></ul>
<p>Depois, clique no botão <b>More Settings... (Mais configurações...)</b>.
</p><p><br />
</p><p>Clique na guia <b>Outgoing mail server (Servidor de saída)</b> e habilite a opção <b>My outgoing mail server (SMTP) requires authentication (Meu servidor de saída (SMTP) requer autenticação)</b>.
</p><p><br />
                            <?php image("http://wiki.hostnet.com.br/images/8/8a/O2013-9.png")?>

</p><p><br />
    Clique na guia <b>Advanced (Avançado)</b> e altere a porta do <b>Servidor de saída (SMTP) para 587 </b> e em seguida clique em <b>OK</b>.
</p><p><br />
                            <?php image("http://wiki.hostnet.com.br/images/7/71/O2013-8.png")?>

</p><p><br />
    Clique no botão <b>Next (Avançar)</b> para finalizar a criação de sua conta.
</p><p><br />
          <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img3.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,170,100,NOME_CONTA,$preto);
    imagestring($imagem,2,170,123,EMAIL_CLI,$preto);
    imagestring($imagem,2,170,197,'mbox.'.DOMINIO_CLI,$preto);
    imagestring($imagem,2,170,221,'smtp.'.DOMINIO_CLI,$preto);
    imagestring($imagem,2,170,271,USUARIO_CONTA,$preto);
    imagestring($imagem,2,170,295,'*******',$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
          image(getBase64FromGeneration());
    $i++;
    ?>
</p><p><br />
    Verifique se a conta <b>consegue autenticar</b> como na imagem abaixo:
</p><p><br />   
                         <?php image("http://wiki.hostnet.com.br/images/d/d1/O2013-11.png")?>

</p><p><br />
    Em, caso de falha confira sua senha em seu <a rel="nofollow" target="_blank" class="external text" href="http://webmail.hostnet.com.br/">webmail</a>, se a mesma está correta.
</p><p><b>Pronto!<i> A sua conta já está configurada. Basta clicar no botão </i></b><i>Finish (Concluir)</i>.
</p><p><br />
                         <?php image("http://wiki.hostnet.com.br/images/e/ea/O2013-17.png")?>

</p>