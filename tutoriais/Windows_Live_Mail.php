<p>Abra o <b>Windows Live Mail</b> e clique na opção <b>Adicionar Conta de E-mail</b> exibida na lateral esquerda da tela.<br /><br />
</p>
<?php IMG('http://wiki.hostnet.com.br/images/2/2d/W1.jpg');?>
<p>A janela <b>Adicionar Conta de E-mail</b> será exibida. Preencha os campos:<br />
</p>
<ul><li> <b>Endereço de E-mail</b>: <?php echo $email;?> 
    </li><li> <b>Senha</b>: Digite a senha do e-mail
    </li><li> <b>Lembra senha</b>: Opcionalmente marque esta caixa
    </li><li> <b>Nome para exibição</b>:  <?php echo $nome_conta;?>
    </li><li> Marque a opção <b>Configurar definições do servidor manualmente para a conta de email</b> e em seguida clique em <b>Avançar</b>. <br /><br />
    </li></ul>
<?php
$imagem=imagecreatefrompng(PATH.'W2.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,154,76,$email,$preto);
imagestring($imagem,2,154,223,$nome_conta,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH.'image_temp'.$i.$mail.'.png');
$i++;
?><p>Na nova janela preencha os campos:<br />
</p>
<ul><li> <b>Meu servidor de entrada de emails é um servidor</b>: Escolha a opção <b>IMAP</b> ou <b>POP3</b>. Recomendamos que escolha <b>IMAP</b> caso não tenha uma preferência;
    </li><li> <b>Servidor de Entrada</b>:  mbox.<?php echo $email_explode[1];?>
    </li><li> <b>Identificação de Logon (se diferente do endereço de email)</b>:  <?php echo $email_explode[0].'='.$email_explode[1];?>
    </li><li> Marque a opção <b>Meu servidor de saída requer autenticação</b> e em seguida clique em <b>Avançar</b>.<br /><br />
    </li></ul>

<?php
$imagem=imagecreatefrompng(PATH.'W3.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,156,122,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,2,54,221,str_replace('@','=',$email),$preto);
imagestring($imagem,2,156,269,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH.'image_temp'.$i.$mail.'.png');
?>
<p>Após inserir todas as informações e configurações conforme os exemplos acima, clique no botão <b>Concluir</b>.<br /><br />
</p>
<?php IMG('http://wiki.hostnet.com.br/images/8/88/W4.jpg');?>

<p>Na tela <b>Mostrar/Ocultar Pastas IMAP</b> serão apresentadas as pastas que ficarão disponíveis em seu <b>Windows Live Mail</b>. Clique no botão <b>Ok</b>.<br /><br />
</p>
<?php IMG('http://wiki.hostnet.com.br/images/2/28/W5.jpg');?>

<p>Voltando para a tela inicial do <b>Windows Live Mail</b>, podemos ver a opção de seu email. Ao clicar nela será apresentada a mensagem que o <b>Windows Live Mail</b> necessita baixar os emails, através do botão <b>Baixar</b>. Após isso, os e-mails serão baixados para seu computador.
</p>