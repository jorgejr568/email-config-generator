<p>Abra o <b>Mozilla Thunderbird</b>. Ao o abrir, será exibida a opção <b>Criar uma nova conta</b>, clique sobre ela.<br /><br />
</p>
<?php
image("http://wiki.hostnet.com.br/images/e/e4/Tutorial-thunderbird-1.jpg");
?>
<p>Após clicar sobre a opção, será aberto uma nova janela onde você deve inserir os primeiros dados da conta de e-mail. <br>
Você deve inserir o <b>Seu nome</b>, o e-mail <b><?php echo EMAIL_CLI;?></b> e a <b>Senha</b> desta conta de e-mail. Terminando de digitar os dados, clique em <b>Continuar</b>.<br /><br />
</p>
<?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img1.png");
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,151,51,NOME_CONTA,$preto);
    imagestring($imagem,4,177,85,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
image(getBase64FromGeneration());

?>
<p>Ao clicar em <b>Continuar</b>, o próprio Thunderbird irá procurar pelas configurações de sua conta de e-mail. Ele irá exibir algo parecido com estas informações:<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img2.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,141,50,NOME_CONTA,$preto);
imagestring($imagem,4,166,76,EMAIL_CLI,$preto);
imagestring($imagem,4,166,196,current(explode('@',EMAIL_CLI)),$preto);
imagestring($imagem,3,145,233,'pop.'.DOMINIO_CLI,$preto);
imagestring($imagem,3,129,270,'smtp.'.DOMINIO_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());

?>
<p>Estes dados estão incorretos, você precisa realizar algumas alterações. Uma delas é localizar o campo <b>Nome de usuário</b> e digitar o endereço da sua conta de e-mail, trocando o sinal de <b>@</b> pelo sinal de <b>=</b>. Por exemplo: <b><?php echo USUARIO_CONTA;?></b>
</p><p>No campo <b>Recebimento</b>, o endereço deste servidor deve ser <b>mbox.<?php echo DOMINIO_CLI;?></b>. Ao lado, iremos retirar a opção <b>POP</b> e marcar a opção <b>IMAP</b>.
</p><p>O protocolo <b>POP</b> e <b>IMAP</b> são diferentes, através do protocolo <b>POP</b> você irá realizar o download de todos as mensagens armazenados na <b>Caixa de Entrada</b> de sua conta de e-mail diretamente para o programa de e-mail. Já o <b>IMAP</b> faz apenas uma cópia de todas as mensagens de sua conta de e-mail. Recomendo a utilização do <b>IMAP</b>.
</p><p>Escolhendo a opção <b>IMAP</b>, o número ao lado deve ser alterado. Este número é o da porta utilizada, no caso do protocolo <b>IMAP</b> ela deve ser <b>143</b>. Deixe o campo ao lado do número da porta que está sendo utilizada como <b>Nenhuma</b>.
</p><p>No campo <b>Envio</b>, o endereço deste servidor deve ser <b>smtp.<?php echo DOMINIO_CLI;?></b>. O protocolo será o <b>SMTP</b> e a porta que deve ser utilizada é a <b>587</b>. O último campo também deve ser marcado a opção <b>Nenhuma</b>.
</p><p>Após alterar todas estas informações, clique em <b>Retestar configuração</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img3.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,141,50,NOME_CONTA,$preto);
imagestring($imagem,4,166,76,EMAIL_CLI,$preto);
imagestring($imagem,4,166,196,USUARIO_CONTA,$preto);
imagestring($imagem,3,145,233,'mbox.'.DOMINIO_CLI,$preto);
imagestring($imagem,3,130,270,'smtp.'.DOMINIO_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Ao clicar em <b>Retestar configuração</b> a opção <b>Criar conta</b> será habilitada. Clique sobre ela.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img4.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,141,50,NOME_CONTA,$preto);
imagestring($imagem,4,166,76,EMAIL_CLI,$preto);
imagestring($imagem,4,153,187,USUARIO_CONTA,$preto);
imagestring($imagem,3,138,219,'mbox.'.DOMINIO_CLI,$preto);
imagestring($imagem,3,125,248,'smtp.'.DOMINIO_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Na próxima tela será exibido um aviso por não usar criptografia nos servidores de entrada e saída (recebimento e envio), você não precisa se preocupar. Lembre-se apenas de marcar a opção <b>Entendo os riscos</b> e depois clicar novamente em <b>Criar conta</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img10.png");
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,4,410,112,'mbox.'.DOMINIO_CLI,$preto);
imagestring($imagem,4,343,160,'smtp.'.DOMINIO_CLI,$preto);

imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Após clicar em <b>Criar conta</b> você já pode notar a relação de pastas da sua conta de e-mail sendo listadas na lateral esquerda do programa de e-mail.<br /><br />
</p>

<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img5.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,29,12,EMAIL_CLI,$preto);
imagestring($imagem,4,40,76,EMAIL_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Mas seu programa de e-mail ainda não foi totalmente configurado, falta apenas mais um procedimento para que possamos finalizar. Para tal, ainda dentro do Thunderbird, você tem 3 (três) formas de seguir até ao próximo passo:
</p>
<ol><li> Clique com o botão direito sobre o seu endereço de e-mail que fica acima da pasta <b>Entrada</b>, e depois clique em <b>Configurar</b>.
    </li><li> Na parte superior do Thunderbird há o menu <b>Editar</b>. Vá até este menu e depois clique no item de menu <b>Configurar contas…</b>.
    </li><li> Clique sobre o seu endereço de e-mail que fica acima da pasta <b>Entrada</b> e depois clique na opção <b>Configurar esta conta</b> localizado na parte central do programa de e-mail.<br /><br />
    </li></ol>

<?php
image("http://wiki.hostnet.com.br/images/8/88/Tutorial-thunderbird-8.jpg");
?>

<p>Quando você prosseguir, será exibido a seguinte tela:<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img6.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,38,95,EMAIL_CLI,$preto);
imagestring($imagem,4,380,85,EMAIL_CLI,$preto);
imagestring($imagem,4,423,226,EMAIL_CLI,$preto);
imagestring($imagem,4,423,193,NOME_CONTA,$preto);
imagestring($imagem,4,510,45,'<'.EMAIL_CLI.'>',$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Nesta tela, você deve clicar na opção <b>Servidor de envio (SMTP)</b>, selecionar a conta que estamos configurando e depois clicar em <b>Editar</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img7.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,276,160,current(explode('@',EMAIL_CLI)).' - smtp.'.DOMINIO_CLI.'(Padrao)',$preto);
imagestring($imagem,3,47,93,EMAIL_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Na nova tela, localize o campo <b>Nome do usuário</b>, este campo deve ter o endereço do seu e-mail completo, alterando apenas o sinal de “<b>@</b>” pelo sinal de “<b>=</b>”, é o mesmo nome de usuário que utilizamos anteriormente na nossa configuração.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img8.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,113,100,'smtp.'.DOMINIO_CLI,$preto);
imagestring($imagem,4,197,259,current(explode('@',EMAIL_CLI)),$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Faça a alteração e clique no botão <b>OK</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES."Img9.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,113,100,'smtp.'.DOMINIO_CLI,$preto);
imagestring($imagem,4,197,259,USUARIO_CONTA,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Pronto! Sua conta de e-mail da <b>Hostnet</b> foi configurada com sucesso no <b>Thunderbird</b>. Você já pode começar a enviar seus e-mails.
</p>