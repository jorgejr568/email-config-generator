<p>Para configurar seu e-mail em um Smartphone com Android 2.3, basta primeiro acessar o menu e clicar em "<b>E-mail</b>".<br /><br />
</p><p><?php IMG("http://wiki.hostnet.com.br/images/f/f7/Sa-1.png")?>
</p><p>Nesta tela informe seu "<b>Endereço de e-mail</b>" e "<b>Senha</b>", e depois clique em "<b>Config. manual</b>".<br /><br />
</p><p>
    <?php
$imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,5,15,143,$email,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>
</p><p>Agora escolha o tipo de conta que deseja, para este caso escolhemos a "<b>Conta IMAP</b>".<br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/d/d6/Sa-3.png")?>
</p><p>Na seção "Configurações de servidor de recepção", informe:<br />
</p>
<ul><li><b>Usuário:</b>  <?php echo "".str_replace('@', '=', $email)."";?><br />
    </li><li><b>Senha:</b> informe a senha do seu e-mail.<br />
    </li><li><b>Servidor IMAP:</b> <?php echo "mbox.".$email_explode[1]."";?>.<br />
    </li><li><b>Porta:</b> 143<br />
    </li><li><b>Tipo de segurança:</b> selecione "<b>Nenhum</b>".<br />
    </li><li><b>Prefixo de caminho IMAP:</b> É opcional.<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Próximo</b>".<br /><br />
</p><p>
<?php
$imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,5,13,57,str_replace('@', '=', $email),$preto);
imagestring($imagem,5,13,188,'mbox.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?></p><p>Na seção "Configurações de servidor de envio", informe:<br />
</p>
<ul><li><b>Servidor SMTP:</b> <?php echo "smtp.".$email_explode[1]."";?><br />
    </li><li><b>Porta:</b> 587<br />
    </li><li><b>Tipo de segurança:</b> selecione "<b>Nenhum</b>"<br />
    </li><li><b> Marque</b>: Solicitar início de sessão<br />
    </li><li><b>Usuário:</b> <?php echo "".str_replace('@', '=', $email)."";?><br />
    </li><li><b>Senha:</b> informe a senha do seu e-mail.<br /><br />
    </li></ul>
<p>Depois de preencher clique em "<b>Próximo</b>".<br /><br />
</p><p>
<?php
$imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,5,13,57,'smtp.'.$email_explode[1],$preto);
imagestring($imagem,5,13,305,str_replace('@', '=', $email),$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?></p><p>Selecione a "<b>Frequência de verificação de e-mail</b>".<br />
    E, aconselhamos, que marque a opção "<b>Notificar-me quando chegar e-mail</b>".<br /><br />
</p><p>Basta clicar em "<b>Próximo</b>". <br /><br />
</p><p>
    <?php IMG("http://wiki.hostnet.com.br/images/e/e2/Sma-6.jpg")?>
</p><p>Sua conta já foi configurada, mas para concluir basta informar:<br />
</p><p><b>Nome da conta:</b> É opcional <br />
    <b>Seu nome:</b> apresentado nas mensagens a serem enviadas.<br /><br />
</p><p>Depois de preencher clique em "<b>Ok</b>".<br /><br />
</p><p>
<?php
$imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,5,13,101,$nome_conta,$preto);
imagestring($imagem,5,13,182,$nome_conta,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?></p><p>Pronto seu <b>Smartphone com Android</b> está configurado para os servidores da <b>Hostnet</b>.<br /><br />
</p><p>
<?php
$imagem=imagecreatefrompng(PATH.'Img'.$i.'.png');
$branco=imagecolorallocate($imagem,255,255,255);
$azul=imagecolorallocate($imagem, 68, 167, 242);
imagestring($imagem,6,14,133,$nome_conta,$branco);
imagestring($imagem,4,14,157,$email,$azul);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?></p><p>Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.<br />
</p>