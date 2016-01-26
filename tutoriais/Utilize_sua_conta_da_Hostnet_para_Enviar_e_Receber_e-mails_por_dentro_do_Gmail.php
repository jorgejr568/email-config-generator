<p>Com esse tutorial você poderá utilizar sua conta de e-mail criada na Hostnet para receber e enviar através do Gmail .
</p><p>Primeiro acesse sua conta do Gmail <a rel="nofollow" target="_blank" class="external free" href="http://www.gmail.com">http://mail.google.com</a>
</p><p>No <b>canto superior direito</b> você deve clicar na <b>engrenagem</b> e depois na opção <b>CONFIGURAÇÕES</b>, conforme a imagem abaixo.
</p><p><br />
</p><p><?php IMG("http://wiki.hostnet.com.br/images/6/63/Gm1.png");?>
</p><p><br />
</p><p>Depois na aba <b>CONTAS E IMPORTAÇÃO</b> você clica em "<b>Adicionar uma conta de e-mail POP3 que você possui</b>" .
</p><p><br />
</p><p><?php IMG("http://wiki.hostnet.com.br/images/8/88/Gm6.png");?>
</p><p><br />
</p><p>Na próxima tela informe o nome do e-mail que deseja configurar.
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'IMG'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,148, 64,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
</p><p>Na próxima tela informe os dados de acordo com seu e-mail:
</p>
<ol><li> Nome de usuário: <b><?php echo str_replace('@','=',$email);?></b>
    </li><li> Senha: senha do seu e-mail
    </li><li> Servidor POP: <b>mbox.<?php echo $email_explode[1];?></b>
    </li><li> Porta: 110
    </li></ol>
<p>Marque as opções desejadas, recomendamos que marque essas:
</p>
<ul><li> Deixar uma cópia da mensagem recuperada no servidor. <font color="red"> <i>se você não marcar essa opção, os e-mails serão baixados ( POP3 ) para o Gmail e sumirão do servidor da Hostnet.</i></font>
    </li><li> Marcar as mensagens recebidas:
    </li></ul>
<p>Depois informe seu nome e seu endereço de e-mail.
</p><p>Depois clique em <b>ADICIONAR CONTA</b>.
</p><p><br />
</p><p> <?php
    $imagem=imagecreatefrompng(PATH.'IMG'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,3,247, 8,$email,$preto);
    imagestring($imagem,3,143, 43,$email,$preto);
    imagestring($imagem,4,143, 69,str_replace('@','=',$email),$preto);
    imagestring($imagem,4,143, 128,'mbox.'.$email_explode[1],$preto);
    imagestring($imagem,4,334, 205,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
</p><p>Depois escolha a opção "<b>Sim, desejo poder enviar e-mails como</b>" e clique em <b>PRÓXIMA ETAPA</b>.
</p><p><br />
</p><p><?php
    $imagem=imagecreatefrompng(PATH.'IMG'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,3,312, 22,$email.' ?',$preto);
    imagestring($imagem,3,269, 58,$email.' .',$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
</p><p>Depois informe seu nome e seu endereço de e-mail.
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'IMG'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,171, 91,$nome_conta,$preto);
    imagestring($imagem,4,171, 120,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?></p><p><br />
</p><p>Na próxima tela informe:
</p>
<ol><li>Servidor SMTP: <b>smtp.<?php echo $email_explode[1];?></b>
    </li><li> Porta: 587
    </li><li> Nome de usuário: <b><?php echo str_replace('@','=',$email);?></b>
    </li><li> Senha:	senha do seu e-mail
    </li><li> Marque a opção: Conexão segura usando TLS (recomendado)
    </li></ol>
<p>Depois clique em <b>ADICIONAR CONTA</b> .
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'IMG'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,152, 82,'smtp.'.$email_explode[1],$preto);
    imagestring($imagem,2,331, 43,$email_explode[1],$preto);    
    imagestring($imagem,4,152, 108,str_replace('@','=',$email),$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
</p><p>Será exibido uma tela como essa abaixo, um código será enviado para o e-mail utilizado, basta pegar esse código e colar no campo informado.
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(PATH.'IMG'.$i.'.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,3,436, 103,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
</p><p>Pronto! Agora você pode enviar e receber e-mails utilizando sua conta por dentro do Gmail.
</p>