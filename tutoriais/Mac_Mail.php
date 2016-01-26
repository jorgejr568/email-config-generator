<p>Para configurar seu "Mac Mail", basta abrir o programa e acessar no menu a opção "<b>Arquivo</b>" >> "<b>Adicionar conta...</b>". <br /><br />
</p><p><?php IMG("http://wiki.hostnet.com.br/images/7/74/Mm-1.png");?>
</p><p>Na tela inicial de configuração você deve informar: <br />
</p>
<ul><li> <b>Nome completo:</b> Informe seu nome
    </li><li> <b>Endereço de E-mail:</b> <?php echo $email;?>
    </li><li> <b>Senha:</b> Informe a senha do seu e-mail <br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Continuar</b>"<br /><br />
</p><p><?php
    $imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,293,151,$nome_conta,$preto);
    imagestring($imagem,2,293,177,$email,$preto);

    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p>Em Servidor de Correio de Entrada, preencha os campos:
</p>
<ul><li> <b>Tipo de conta:</b> Escolha a opção <b>IMAP</b> ou <b>POP3</b>. Recomendamos que escolha <b>IMAP</b> caso não tenha uma preferência.
    </li><li> <b>Descrição:</b> É opcional.
    </li><li> <b>Servidor de Correio de Entrada:</b> <b>mbox.<?php echo $email_explode[1];?></b>
    </li><li> <b>Nome de usuário:</b> <b><?php echo $email_explode[0].'='.$email_explode[1];?></b>
    </li><li> <b>Senha:</b> Digite a senha do seu e-mail.<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Continuar</b>"<br /><br />
</p><p><?php
    $imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,355,157,'mbox.'.$email_explode[1],$preto);
    imagestring($imagem,2,355,187,$email_explode[0].'='.$email_explode[1],$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p>Aparecerá a seguinte mensagem: "O Mail não pode enviar a sua senha ao servidor de força segura. Deseja continuar sem uma senha segura?"<br />
</p><p>Clique em "<b>Continuar</b>".<br /><br />
</p><p><?php IMG("http://wiki.hostnet.com.br/images/6/6c/Mm-4.png");?>
</p><p>Em Servidor de Correio de Saída, preencha os campos:
</p>
<ul><li> <b>Descrição:</b> É opcional.
    </li><li> <b>Servidor de Correio de Saída:</b>  <b>smtp.<?php echo $email_explode[1];?></b>
    </li><li> <b>Nome de usuário:</b> <b><?php echo $email_explode[0].'='.$email_explode[1];?></b>
    </li><li> <b>Senha:</b> Digite a senha do e-mail<br />
    </li></ul>
<p>Marque: "<b>Usar somente este servidor</b>" e "<b>Usar autenticação</b>".<br /><br />
</p><p>Depois de preencher clique em "<b>Continuar</b>"<br /><br />
</p><p><?php
    $imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,339,115,'smtp.'.$email_explode[1],$preto);
    imagestring($imagem,2,339,193,$email_explode[0].'='.$email_explode[1],$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p>Aparecerá novamente a seguinte mensagem: "O Mail não pode enviar a sua senha ao servidor de força segura. Deseja continuar sem uma senha segura?"<br />
</p><p>Clique em "<b>Continuar</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/6/6c/Mm-4.png");?>
</p><p>Será exibido o resumo das informações da conta criada. Apenas clique "<b>Criar</b>".<br /><br />
</p><p><?php
    $imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,353,83,$email,$preto);
    imagestring($imagem,2,353,102,$nome_conta,$preto);
    imagestring($imagem,2,353,120,$email,$preto);
    imagestring($imagem,2,353,142,$email_explode[0].'='.$email_explode[1],$preto);
    imagestring($imagem,2,353,187,'mbox.'.$email_explode[1],$preto);
    imagestring($imagem,2,353,254,'smtp.'.$email_explode[1],$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>

</p><p>Pronto seu <b>Mac Mail</b> está configurado para os servidores da <b>Hostnet</b>.<br /><br />
</p><p><?php
    $imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,385,128,$nome_conta.',',$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p>Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.
</p>