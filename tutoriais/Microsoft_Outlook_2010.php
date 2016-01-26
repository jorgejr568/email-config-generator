<p>Para configurar uma nova conta de e-mail no Microsoft Outlook 2010 clique em "<b>Arquivo</b>" >> "<b>Informações</b>" >> "<b>Adicionar conta</b>". <br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/2/21/Outlook10-1.png")?>

<p>Na próxima tela marque a opção de "<b>Configurar manualmente as definições do servidor ou tipos de servidor adicionais</b>".<br /><br />
</p><p>Depois clique em "<b>Avançar</b>".<br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/7/7b/Outlook10-2.png")?>

<p>Agora escolha o "Serviço" marcando a opção "<b>Email da Internet</b>".<br /><br />
</p><p>Depois clique em "<b>Avançar</b>".<br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/8/89/Outlook10-3.png")?>

<p>A configuração necessária para que a conta de e-mail funcione será apresentada na próxima tela. <br /><br />
</p><p><b>Informações do Usuário</b><br />
</p>
<ul><li> <b>Nome</b>:  Seu nome
    </li><li> <b>Endereço de Email</b>: <?php echo $email;?><br /><br />
    </li></ul>
<p><b>Informações do Servidor</b><br />
</p>
<ul><li> <b>Tipo de conta</b>:  Escolha a opção <b>IMAP</b> ou <b>POP3</b>. Recomendamos que escolha <b>IMAP</b> caso não tenha uma preferência.
    </li><li> <b>Servidor de entrada de emails</b>:  <b>mbox.<?php echo $email_explode[1];?></b>
    </li><li> <b>Servidor de saída de emails (SMTP)</b>:  <b>smtp.<?php echo $email_explode[1];?></b><br /><br />
    </li></ul>
<p><b>Informações de Logon</b><br />
</p>
<ul><li> <b>Nome de usuário</b>:  <b><?php echo str_replace('@','=',$email);?></b>
    </li><li> <b>Senha</b>: Digite a senha do seu e-mail<br /><br />
    </li></ul>
<p>Marque a opção "<b>Lembrar senha</b>", e clique em "<b>Mais configurações</b>".<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH.'Img1.png');
$preto=imagecolorallocate($imagem, 0, 0, 0);
imagestring($imagem, 2,210,135, $nome_conta, $preto);
imagestring($imagem, 2,210,160, $email, $preto);
imagestring($imagem, 2,210,233, 'mbox.'.$email_explode[1], $preto);
imagestring($imagem, 2,210,258, 'smtp.'.$email_explode[1], $preto);
imagestring($imagem, 2,210,306,str_replace('@','=',$email), $preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");

?>
<br /><br />
<p>Em "Mais configurações", clique na aba "<b>Servidor de Saída</b>".<br />
</p><p>Marque a opção "<b>Meu servidor de saída (SMTP) requer autenticação</b>".<br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/9/9d/Outlook10-5.png")?>

<p>Agora na aba "<b>Avançado</b>" verifique se as portas estão corretas:<br />
</p>
<ul><li> <b>Servidor de Entrada (IMAP):</b> 143
    </li><li> <b>Servidor de Saída (SMTP):</b> 587
    </li></ul>
<p><b>OBS:</b> Caso tenha escolhido servidor POP3, no lugar de IMAP, será informado POP3, neste caso utilize a porta <b>110</b>.<br /><br />
</p><p>Clique em "<b>Ok</b>" e depois em "<b>Avançar</b>".<br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/7/73/Outlook10-6.png")?>

<p>Nesta tela aparecerá a confirmação de toda configuração realizada.<br /><br />
</p><p>Ao concluir clique em "<b>Fechar</b>"<br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/e/eb/Outlook10-7.png")?>

<p>Na tela final aparecerá uma mensagem de "Parabéns", então basta clicar em "<b>Concluir</b>".<br /><br />
</p>
                            <?php IMG("http://wiki.hostnet.com.br/images/7/7e/Outlook10-8.png")?>

<p>Pronto seu <b>Outlook 2010</b> está configurado para os servidores da <b>Hostnet</b>.<br />
    Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto "teste" para certificar que funcionou corretamente.
</p>