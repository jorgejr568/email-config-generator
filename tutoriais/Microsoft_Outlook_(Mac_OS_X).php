<p>Abra seu programa de e-mail "Microsoft Outlook" do Mac, e clique em "<b>Tools</b>" >> "<b>Accounts...</b>". <br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/0/03/Mo-1.png");?>
</p><p>Na próxima tela você deve escolher o tipo de conta, clique em "<b>E-mail Account</b>". <br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/d/df/Mo-2.jpg");?>
</p><p>Agora informará os dados da sua conta de e-mail.<br />
</p>
<ul><li> <b>E-mail address:</b> <?php echo $email;?><br />
    </li><li> <b>Password:</b> Digite a senha do seu e-mail<br />
    </li><li> <b>Use name:</b> <?php echo $email_explode[0].'='.$email_explode[1];?><br />
    </li><li> <b>Type:</b> Escolha a opção <b>IMAP</b> ou <b>POP3</b>. Recomendamos que escolha <b>IMAP</b> caso não tenha uma preferência. <br />
    </li><li> <b>Incoming server:</b> mbox.<?php echo $email_explode[1];?><br />
    </li><li> <b>Outgoing server:</b>  smtp.<?php echo $email_explode[1];?><br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Add Account</b>".<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'Img1.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,137,48, $email, $preto);
    imagestring($imagem, 2,137,163,str_replace('@','=',$email), $preto);
    imagestring($imagem, 2,137,221, 'mbox.'.$email_explode[1], $preto);
    imagestring($imagem, 2,137,295, 'smtp.'.$email_explode[1], $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?></p><p>Na próxima tela verá todos os dados que preencheu. Basta fechá-la.<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'Img2.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    $branco=imagecolorallocate($imagem, 255, 255, 255);
    imagestring($imagem, 6,20,69, $nome_conta, $branco);
    imagestring($imagem, 2,20,83, $email, $branco);

    imagestring($imagem, 2,274,106, $nome_conta, $preto);
    imagestring($imagem, 2,274,151, $nome_conta, $preto);
    imagestring($imagem, 2,274,173, $email, $preto);
    imagestring($imagem, 2,274,219,str_replace('@','=',$email), $preto);
    imagestring($imagem, 2,274,263, 'mbox.'.$email_explode[1], $preto);
    imagestring($imagem, 2,274,335, 'smtp.'.$email_explode[1], $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p>Pronto seu <b>Microsoft Outlook (Mac OS X)</b> está configurado para os servidores da <b>Hostnet</b>.<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'Img3.png');
    $branco=imagecolorallocate($imagem,255,255,255);
    imagestring($imagem, 2,42,138, $nome_conta, $branco);

    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,321,18, $nome_conta, $preto);
    imagestring($imagem, 2,451,191, $nome_conta.',', $preto);
    imagestring($imagem, 1,461,174, $email, $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p>Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.
</p>