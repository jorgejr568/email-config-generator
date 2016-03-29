<p>Abra o <b>Windows Mail</b>, clique em: <b>Ferramentas</b> >> <b>Contas</b>.<br /><br />
</p>
<?php image('http://wiki.hostnet.com.br/images/1/1f/A1.jpg');?>
<p>Na tela <b>Contas na Internet</b>, clique no botão <b>Adicionar</b>.<br /><br />
</p>
<?php image('http://wiki.hostnet.com.br/images/7/77/B1.jpg');?> <br /><br />
<p>O assistente de configuração do <b>Windows Mail</b> será iniciado. Em <b>Tipo de Conta</b> selecione a opção <b>Conta de Email</b> e, depois, clique em <b>Avançar</b>.<br /><br />
</p>
<?php image('http://wiki.hostnet.com.br/images/9/92/C1.jpg');?>
<p>No campo <b>Nome para exibição</b>, informe seu nome.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'D1.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,246,199,NOME_CONTA,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<br /><br />
<p>No campo <b>Endereço de email</b> informe: <b><?php echo EMAIL_CLI;?></b><br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'E1.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,191,159,EMAIL_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?> <br /><br />
<p>Na tela <b>Configurar Servidores de email</b>, preencha os campos.<br />
</p>
<ul><li> No campo <b>Tipo de servidor de entrada de emails</b>, selecione a opção <b>POP3</b> ou <b>IMAP</b>.
    </li><li> No campo <b>Servidor de entrada de emails (POP3, IMAP)</b>: mbox.<?php echo DOMINIO_CLI;?>
    </li><li> No campo <b>Servidor de saída de emails (SMTP)</b>: smtp.<?php echo DOMINIO_CLI;?><br /><br />
    </li></ul>
<p>Marque a opção <b>O servidor de saída requer autenticação</b> e, depois, clique no botão <b>Avançar</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'F1.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,71,178,'mbox.'.DOMINIO_CLI,$preto);
imagestring($imagem,2,71,243,'smtp.'.DOMINIO_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?> <br /><br />
<p>No campo <b>Nome de usuário do email</b>, informe o e-mail completo trocando o sinal arroba ( <b>@</b> ) pelo sinal de igualdade ( <b>=</b> ), ficando assim:  <b><?php echo USUARIO_CONTA;?></b><br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'G1.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,198,132,USUARIO_CONTA,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?> <br /><br />
<p><b>NÃO</b> marque a opção <b>Não baixar meus emails agora</b> e clique em <b>Concluir</b>.
</p>
<a href="http://wiki.hostnet.com.br/images/b/b4/H1.jpg" data-lightbox='imagem-data'><img alt="H1.jpg" src="http://wiki.hostnet.com.br/images/b/b4/H1.jpg" /></a> <br /><br />
<p><b>Pronto</b>! A sua conta já está configurada. Basta clicar no botão <b>Fechar</b>.
</p>
