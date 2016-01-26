<p>Para configurar seu iPhone basta acessar o menu e clicar em "<b>Ajustes</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/4/4d/1-iphone.png");?>
</p><p>Na próxima tela clique em "<b>Mail, Contatos, Calendários</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/c/c6/2-iphone_.png");?>
</p><p>Logo depois clique em <b>"Adicionar Conta</b>" >> "<b>Outra</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/b/bc/33-iphone.png");?>

    <?php IMG("http://wiki.hostnet.com.br/images/2/2f/44-iphone.png");?>

</p><p>Agora clique em "<b>Adicionar Conta do Mail</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/1/1e/5-iphone.png");?>
</p><p>Na próxima tela serão exibidos os seguintes campos:
</p><p><b>Digite as informações de sua conta</b>
</p>
<ul><li> <b>Nome</b>: <?php echo $nome_conta;?>
    </li><li> <b>Endereço</b>:  <?php echo $email;?>
    </li><li> <b>Senha</b>: Senha do seu e-mail
    </li><li> <b>Descrição</b>: Exemplo:  <b><?php echo $nome_conta;?></b>
    </li></ul>
<p>Depois aperte a opção "<b>SALVAR</b>".<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH."Img$i.png");
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,86,71, $nome_conta, $preto);
    imagestring($imagem, 2,86,100, $email, $preto);
    imagestring($imagem, 2,86,168, $nome_conta, $preto);

    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>

</p><p>Na próxima tela escolha a opção <b>IMAP</b>.<br />
    O "<b>Nome</b>, <b>Endereço</b> e <b>Descrição</b>" já estarão preenchidos.<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH."Img$i.png");
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,86,134, $nome_conta, $preto);
    imagestring($imagem, 2,86,168, $email, $preto);
    imagestring($imagem, 2,86,203, $nome_conta, $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;


    ?></p><p>Logo abaixo verá os seguintes campos:
</p><p><b>Servidor de Correio de Entrada</b>
</p>
<ul><li> No campo "<b>Nome do host</b>" informe: mbox.<?php echo end($email_explode);?>
    </li><li> No campo "<b>Nome do usuário</b>" informe: <?php echo str_replace('@','=',$email);?>
    </li><li> No campo "<b>Senha</b>" informe a senha do seu e-mail.<br /><br />
    </li></ul>
<p>       <?php
    $imagem=imagecreatefrompng(PATH."Img$i.png");
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,114,37,'mbox.'.end($email_explode), $preto);
    imagestring($imagem, 2,127,69, str_replace('@','=',$email), $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;


    ?>
</p><p><b>Servidor de Correio de Saída</b>
</p>
<ul><li> No campo "<b>Nome do host</b>" informe: smtp.<?php echo end($email_explode);?>
    </li><li> No campo "<b>Nome do usuário</b>" informe: <?php echo str_replace('@','=',$email);?>
    </li><li> No campo "<b>Senha</b>" informe a senha do seu e-mail.<br /><br />
    </li></ul>
<p><p>    <?php
    $imagem=imagecreatefrompng(PATH."Img$i.png");
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,114,37,'smtp.'.end($email_explode), $preto);
    imagestring($imagem, 2,127,70, str_replace('@','=',$email), $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;


    ?>
</p><p>Ao clicar em "<b>Salvar</b>", será exibido, depois de alguns segundos, a seguinte mensagem: "<b>Não Foi Possível Conectar Utilizando SSL. Deseja tentar configurar a conta sem SSL?</b>". Basta clicar em "<b>Sim</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/0/06/8-iphone.png");?>
</p><p>Esta mensagem pode aparecer mais uma vez, então é só clicar em "<b>Sim</b>".<br />
    Aguarde alguns segundos para a configuração ser concluída.<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH."Img$i.png");
    $preto=imagecolorallocate($imagem, 125, 125, 125);
    imagestring($imagem, 2,111,130,'mbox.'.end($email_explode), $preto);
    imagestring($imagem, 2,130,161, str_replace('@','=',$email), $preto);
    imagestring($imagem, 2,111,263,'smtp.'.end($email_explode), $preto);
    imagestring($imagem, 2,130,294, str_replace('@','=',$email), $preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;


    ?>
</p><p>Pronto seu <b>iPhone</b> está configurado para os servidores da <b>Hostnet</b>.<br />
    Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.
</p>