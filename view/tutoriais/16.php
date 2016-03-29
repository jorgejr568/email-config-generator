<p>Para configurar seu e-mail em um dispositivo com Android <b>4.0</b>, basta primeiro acessar o menu e clicar em "E-mail".
</p><p><br />
    Na tela para iniciar a configuração, será necessário informar seu e-mail <b><?php echo EMAIL_CLI;?></b> e <b>senha</b>.<br />
    <b>DESMARQUE</b> a opção "Notificação Push".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img1.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,220,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
    Depois de desmarcar a opção "Notificação Push", aparecerá embaixo a opção <b>Config. manual</b>. Clique nela.
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img2.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,220,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p><br />
    Na seção "Configurações de servidor de recepção", informe:<br />
</p>
<ul><li><b>Usuário:</b>  <?php echo USUARIO_CONTA;?><br />
    </li><li><b>Senha:</b> informe a senha do seu e-mail.<br />
    </li><li><b>Servidor IMAP:</b> mbox.<?php echo DOMINIO_CLI;?><br />
    </li><li><b>Tipo de segurança:</b> selecione "<b>Nenhum</b>".<br />
    </li><li><b>Porta:</b> 143<br />
    </li><li><b>Prefixo de caminho IMAP:</b> É opcional.<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Próximo</b>".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img3.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,129,USUARIO_CONTA,$preto);
    imagestring($imagem,5,24,288,'mbox.'.DOMINIO_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
    Na seção "Configurações de servidor de envio", informe:<br />
</p>
<ul><li><b>Servidor SMTP:</b> smtp.<?php echo DOMINIO_CLI;?><br />
    </li><li><b>Tipo de segurança:</b> Nenhum<br />
    </li><li><b>Porta:</b> 587<br />
    </li><li><b> Marque </b>: Solicitar início de sessão<br />
    </li><li><b>Usuário:</b> <?php echo USUARIO_CONTA;?><br />
    </li><li><b>Senha:</b> informe a senha do seu e-mail<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Próximo</b>".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img4.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,5,24,129,'smtp.'.DOMINIO_CLI,$preto);

    imagestring($imagem,5,24,416,USUARIO_CONTA,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
    Pronto seu <b>Smartphone com Android</b> está configurado para os servidores da <b>Hostnet</b>.
</p><p><br />
    <?php image("http://wiki.hostnet.com.br/images/thumb/6/62/Android40-5.png/350px-Android40-5.png");?>
</p><p><br />
    Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.<br />
</p>