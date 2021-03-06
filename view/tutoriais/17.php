<p>Para configurar seu e-mail em um dispositivo com Android <b>4.1</b>, basta primeiro acessar o menu e clicar em "<b>E-mail</b>".
</p><p><br />
  <?php image("http://wiki.hostnet.com.br/images/thumb/5/51/Android41_1.png/350px-Android41_1.png");?>
</p><p><br />
    Para você chegar em <b>Configurações</b> é necessário apertão o botão de "<b>MENU</b>" no seu aparelho.
</p><p><br />
    <?php image("http://wiki.hostnet.com.br/images/thumb/d/db/Android41_2.png/350px-Android41_2.png");?>
</p><p><br />
    Na tela a seguir clique no ícone de "<b>+</b>", para configurar uma nova conta.
</p><p><br />
    <?php image("http://wiki.hostnet.com.br/images/thumb/c/ce/Android41_3.png/350px-Android41_3.png");?>

</p><p><br />
    Então vamos começar a configurar!
</p><p>Para isso informe seu <b><?php echo EMAIL_CLI;?></b> e <b>senha</b>, e depois clique em "<b>Config. Manual</b>".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img1.png');
    $preto=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem,5,24,174,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>

</p><p><br />
    Na seção "<b>Adicionar conta de e-mail</b>", aparecerá:
</p><p><br />
    <b>Que tipo de conta?</b>
</p><p>Escolha: <b>Conta IMAP</b>.
</p><p><br />
    <i>Lembrando que o protocolo IMAP faz uma cópia de suas mensagens do servidor para seu dispositivo móvel.</i>
</p><p><br />

    <?php image("http://wiki.hostnet.com.br/images/thumb/b/b3/Android41_5.png/350px-Android41_5.png");?>

</p><p><br />
    Na seção "<b>Configurações do Servidor</b>", informe:<br />
</p>
<ul><li><b>Usuário:</b> <?php echo USUARIO_CONTA;?><br />
    </li><li><b>Senha:</b> informe a senha do seu e-mail.<br />
    </li><li><b>Servidor IMAP:</b> mbox.<?php echo DOMINIO_CLI;?><br />
    </li><li><b>Tipo de segurança:</b> Nenhum<br />
    </li><li><b>Porta:</b> 143<br />
    </li><li><b>Prefixo de caminho IMAP:</b> É opcional<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Próximo</b>".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img2.png');
    $preto=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem,5,24,128,USUARIO_CONTA,$preto);
    imagestring($imagem,5,24,312,'mbox.'.DOMINIO_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>

</p><p><br />
    Ainda em "<b>Configurações do Servidor</b>", na próxima tela, informe:<br />
</p>
<ul><li><b>Servidor SMTP:</b> smtp.<?php echo DOMINIO_CLI;?><br />
    </li><li><b>Tipo de segurança:</b> Nenhum<br />
    </li><li><b>Porta:</b> 587<br />
    </li><li> <b>Marque</b>:  Solicitar início de sessão<br />
    </li><li><b>Usuário:</b> <?php echo USUARIO_CONTA;?><br />
    </li><li><b>Senha:</b> informe a senha do seu e-mail.<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Próximo</b>".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img3.png');
    $preto=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem,5,24,117,'smtp.'.DOMINIO_CLI,$preto);
    imagestring($imagem,5,24,453,USUARIO_CONTA,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>

</p><p><br />
    Agora entrará na seção "<b>Opções da Conta</b>".<br />
</p><p>Essa seção é configurada de acordo com as suas necessidades, então não há uma configuração padrão. <br />
</p><p><br />
    Depois de configurar clique em "<b>Próximo</b>".
</p><p><br />
    <?php image("http://wiki.hostnet.com.br/images/thumb/a/ae/Android41_8.png/350px-Android41_8.png");?>

</p><p><br />
    Pronto seu <b>Smartphone com Android</b> está configurado para os servidores da <b>Hostnet</b>.<br />
</p><p>Informe apenas o <b>nome da conta</b> e o <b>seu nome</b> para finalizar. Depois é só clicar em "<b>OK</b>"!
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img4.png');
    $preto=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem,5,24,192,NOME_CONTA,$preto);
    imagestring($imagem,5,24,282,NOME_CONTA,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p>