<p>Abra seu programa de e-mail "Microsoft Outlook" do Mac, e clique em "<b>Tools</b>" >> "<b>Accounts...</b>". <br /><br />
</p><p>
    <?php image("http://wiki.hostnet.com.br/images/0/03/Mo-1.png");?>
</p><p>Na próxima tela você deve escolher o tipo de conta, clique em "<b>E-mail Account</b>". <br /><br />
</p><p>
    <?php image("http://wiki.hostnet.com.br/images/d/df/Mo-2.jpg");?>
</p><p>Agora informará os dados da sua conta de e-mail.<br />
</p>
<ul><li> <b>E-mail address:</b> <?php echo EMAIL_CLI;?><br />
    </li><li> <b>Password:</b> Digite a senha do seu e-mail<br />
    </li><li> <b>Use name:</b> <?php echo USUARIO_CONTA;?><br />
    </li><li> <b>Type:</b> Escolha a opção <b>IMAP</b> ou <b>POP3</b>. Recomendamos que escolha <b>IMAP</b> caso não tenha uma preferência. <br />
    </li><li> <b>Incoming server:</b> mbox.<?php echo DOMINIO_CLI;?><br />
    </li><li> <b>Outgoing server:</b>  smtp.<?php echo DOMINIO_CLI;?><br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Add Account</b>".<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img1.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,137,48, EMAIL_CLI, $preto);
    imagestring($imagem, 2,137,163,USUARIO_CONTA, $preto);
    imagestring($imagem, 2,137,221, 'mbox.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 2,137,295, 'smtp.'.DOMINIO_CLI, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p>Na próxima tela verá todos os dados que preencheu. Basta fechá-la.<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img2.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    $branco=imagecolorallocate($imagem, 255, 255, 255);
    imagestring($imagem, 6,20,69, NOME_CONTA, $branco);
    imagestring($imagem, 2,20,83, EMAIL_CLI, $branco);

    imagestring($imagem, 2,274,106, NOME_CONTA, $preto);
    imagestring($imagem, 2,274,151, NOME_CONTA, $preto);
    imagestring($imagem, 2,274,173, EMAIL_CLI, $preto);
    imagestring($imagem, 2,274,219,USUARIO_CONTA, $preto);
    imagestring($imagem, 2,274,263, 'mbox.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 2,274,335, 'smtp.'.DOMINIO_CLI, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p>Pronto seu <b>Microsoft Outlook (Mac OS X)</b> está configurado para os servidores da <b>Hostnet</b>.<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img3.png');
    $branco=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem, 2,42,138, NOME_CONTA, $branco);

    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,321,18, NOME_CONTA, $preto);
    imagestring($imagem, 2,451,191, NOME_CONTA.',', $preto);
    imagestring($imagem, 1,461,174, EMAIL_CLI, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p>Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.
</p>