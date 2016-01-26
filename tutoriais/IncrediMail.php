<p>Para configurar seu IncrediMail deve acessar o menu "<b>Ferramentas</b>" >> "<b>Contas de e-mail</b>". <br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/d/db/Im-1.png");?>
</p><p>Abrirá uma janela onde clicará em "<b>Adicionar</b>", para adicionar uma nova conta de e-mail.<br /><br />
</p><p><?php IMG("http://wiki.hostnet.com.br/images/5/54/Im-2.png");?>
</p><p>Em "Ajustes na conta" selecione a opção "<b>Configurarei os ajustes sozinho</b>", e clique em "<b>Avançar</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/0/00/Im-3.png");?>
</p><p>Nesta seção, para configurar sua conta manualmente, clique em "<b>Outra</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/9/91/Im-4.png");?>
</p><p>Agora informe:<br />
</p>
<ul><li> <b>Seu endereço de e-mail:</b> <?php echo $email;?>
    </li><li> <b>Sua senha:</b> Informe a senha do seu e-mail<br /><br />
    </li></ul>
<p>
    <?php
    $imagem=imagecreatefrompng(PATH.'Img1.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,258,149,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>

</p><p>Nesta seção irá configurar o servidor.<br /><br />
</p><p>O tipo do meu servidor de correio de entrada é: <b>IMAP</b> ou <b>POP3</b>.<br />
</p><p><b>IMAP</b>: Protocolo IMAP faz uma cópia de suas mensagens do servidor para seu IncrediMail.<br />
    <b>POP3</b>: Protocolo POP3 baixa e logo após remove todos as mensagens em seu servidor.<br />
</p><p>No exemplo abaixo optei por <b>IMAP</b>.<br /><br />
</p>
<ul><li> <b>Servidor de correio de entrada:</b> <br />
    </li></ul>
<p>Servidor de mensagens sendo recebidas:  <b>mbox.<?php echo $email_explode[1];?></b>.<br />
</p>
<ul><li> <b>Servidor de correio de saída:</b> <br />
    </li></ul>
<p>Servidor de mensagens sendo recebidas:  <b>smtp.<?php echo $email_explode[1];?></b>.<br /><br />
</p><p>Em seguida clique em "<b>Avançar</b>"<br /><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'Img2.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,247,223,'mbox.'.$email_explode[1],$preto);
    imagestring($imagem,2,247,310,'smtp.'.$email_explode[1],$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>


</p><p>A seguinte mensagem será exibida: "<b>Parabéns! O IncrediMail criou uma nova conta com êxito</b>", mas a configuração ainda não acabou. Para prosseguir clique em "<b>OK</b>".<br /><br />
</p><p>
    <?php IMG("http://www.hostnet.com.br/wiki/images/e/e5/Im-6.png");?>

</p><p>Nesta tela será exibida sua conta já inserida no IncrediMail, mas para concluir a configuração clique em "<b>Propriedades</b>".
</p><p>
<?php
    $imagem=imagecreatefrompng(PATH.'Img3.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,74,132,$email,$preto);
    imagestring($imagem,2,224,132,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
    
</p><p>Na aba "<b>Geral</b>" você pode alterar os dados que desejar. <br /><br />
    Na aba "<b>Servidores</b>" será necessário corrigir o campo "<b>Nome do usuário</b>", informe: <b><?php echo str_replace('@', '=', $email);?></b><br />
    No campo campo "<b>Senha</b>" informe a senha do seu e-mail.<br /><br />
    Não esqueça de marcar as opções "<b>Lembrar senha</b>" e "<b>Meu servidor exige autenticação</b>".<br /><br />
</p><p>
   <?php
    $imagem=imagecreatefrompng(PATH.'Img4.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    $branco=imagecolorallocate($imagem, 255, 255, 255);
    imagestring($imagem,3,230,6,$email,$branco);

    imagestring($imagem,2,348,119,'mbox.'.$email_explode[1],$preto);
    imagestring($imagem,2,348,164,'smtp.'.$email_explode[1],$preto);
    imagestring($imagem,2,348,234,str_replace('@','=',$email),$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
    <br /><br />
</p><p>Na aba "<b>Avançado</b>", informe as seguintes portas:<br /><br />
</p>
<ul><li> Correio de saída (SMTP): <b>587</b><br />
    </li><li> Correio de entrada (IMAP): <b>143</b><br />
    </li></ul>
<p><b>OBS:</b> Caso tenha escolhido servidor POP3, no lugar de IMAP, será informado POP3, neste caso utilize a porta <b>110</b>.
</p><p>Depois de alterado clique em "<b>Ok</b>". <br /><br />
</p><p>
  <?php
    $imagem=imagecreatefrompng(PATH.'Img5.png');
    $branco=imagecolorallocate($imagem, 255, 255, 255);
    imagestring($imagem,3,230,6,$email,$branco);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>    <br /><br />
</p><p>Pronto seu <b>IncrediMail</b> está configurado para os servidores da Hostnet.<br />
    Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.
</p>