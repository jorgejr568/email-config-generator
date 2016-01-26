<p>No seu Iphone acesso o aplicativo <b>Ajustes</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/3/34/Pop-iphone5ios7-2.jpg");?>
</p><p><br />
    Depois acesse a opção <b>Mail, Contatos e Calendários</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/8/83/Pop-iphone5ios7-3.jpg");?>

</p><p><br />
    Depois <b>Adicionar Conta</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/4/49/Pop-iphone5ios7-4.jpg");?>

</p><p><br />
    Toque em <b>Outra</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/6/67/Pop-iphone5ios7-5.jpg");?>

</p><p><br />
    Acesse a opção <b>Adic. Conta do Mail</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/b/ba/Pop-iphone5ios7-6.jpg");?>

</p><p><br />
    Preencha primeiro os campos destacados e após clique em <b>Seguinte</b> (conforme a imagem).
</p>
<ul><li> <b>Nome</b>: <?php echo $nome_conta;?>
    </li><li> <b>E-mail</b>: <?php echo $email;?>
    </li><li> <b>Senha</b>: senha do seu e-mail
    </li><li> <b>Descrição</b>: <?php echo $nome_conta;?>
    </li></ul>
<p><br />
    <?php
    $imagem=imagecreatefrompng(PATH.'Img1.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,90,85, $nome_conta, $preto);
    imagestring($imagem, 2,90,118, $email, $preto);
    imagestring($imagem, 2,90,155, '*******', $preto);
    imagestring($imagem, 2,90,190, 'smtp.'.$email_explode[1], $preto);
    imagestring($imagem, 2,209,311,$nome_conta, $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
    Toque em <b>IMAP</b> e preencha todos os campos conforme orientação na imagem abaixo.
</p>
<ul><li> <b>Nome</b>: <?php echo $nome_conta;?>
    </li><li> <b>E-mail</b>: <?php echo $email;?>
    </li><li> <b>Descrição</b>: <?php echo $nome_conta;?>
    </li></ul>
<p><br />
    SERVIDOR DE CORREIO DE ENTRADA:
</p>
<ul><li> <b>Nome do Host</b>: mbox.<?php echo $email_explode[1];?>
    </li><li> <b>Nome do Usuário</b>: <?php echo $email_explode[0].'='.$email_explode[1];?> <font color="red"></font>
    </li><li> <b>Senha</b>: senha do seu e-mail
    </li></ul>
<p><br />
    SERVIDOR DE CORREIO DE SAÍDA:
</p>
<ul><li> <b>Nome do host</b>: smtp.<?php echo $email_explode[1];?>
    </li><li> <b>Nome do Usuário</b>: <?php echo $email_explode[0].'='.$email_explode[1];?> <font color="red"></font>
    </li><li> <b>Senha</b>: senha do seu e-mail
    </li></ul>
<p><br />
    <?php
    $imagem=imagecreatefrompng(PATH.'Img2.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,85,151, $nome_conta, $preto);
    imagestring($imagem, 2,85,183, $email, $preto);
    imagestring($imagem, 2,85,218, $nome_conta, $preto);
    imagestring($imagem, 2,110,295, 'mbox.'.$email_explode[1], $preto);
    imagestring($imagem, 2,128,331, $email_explode[0].'='.$email_explode[1], $preto);
    imagestring($imagem, 2,110,437, 'smtp.'.$email_explode[1], $preto);
    imagestring($imagem, 2,128,471, $email_explode[0].'='.$email_explode[1], $preto);

    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
    Após o preenchimento dos dados, toque em <b>Salvar</b> e no alerta "A Identidade do Servidor não pode ser verificada" toque em <b>Detalhes</b>.
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(PATH.'Img3.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);

    imagestring($imagem, 2,73,108,'"pop.'.$email_explode[1].'".', $preto);

    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
    Agora, toque em <b>Aceitar</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/f/f3/Pop-iphone5ios7-10.jpg");?>

</p><p><br />
    Novamente, toque em <b>Detalhes</b>.
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(PATH.'Img4.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);

    imagestring($imagem, 2,71,128,'"smtp.'.$email_explode[1].'".', $preto);

    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
    Após, toque em <b>Aceitar</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/8/89/Pop-iphone5ios7-12.jpg");?>

</p><p><br />
    Toque em <b>Salvar</b>.
</p><p><br />
    <?php IMG("http://wiki.hostnet.com.br/images/7/7c/Imap-iphone5ios7-13.jpg");?>

</p><p><br />
    Pronto! Sua conta foi configurada com sucesso.
</p>