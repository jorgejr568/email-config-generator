<p>Abra o <b>Mozilla Thunderbird</b>. Ao o abrir, será exibida a opção <b>Criar uma nova conta</b>, clique sobre ela.<br /><br />
</p>
<?php
IMG("http://wiki.hostnet.com.br/images/e/e4/Tutorial-thunderbird-1.jpg");
?>
<p>Após clicar sobre a opção, será aberto uma nova janela onde você deve inserir os primeiros dados da conta de e-mail. <br>
Você deve inserir o <b>Seu nome</b>, o e-mail <b><?php echo $email;?></b> e a <b>Senha</b> desta conta de e-mail. Terminando de digitar os dados, clique em <b>Continuar</b>.<br /><br />
</p>
<?php
    $imagem=imagecreatefrompng(PATH."Img$i.png");
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,151,51,$nome_conta,$preto);
    imagestring($imagem,4,177,85,$email,$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
    $i++;

?>
<p>Ao clicar em <b>Continuar</b>, o próprio Thunderbird irá procurar pelas configurações de sua conta de e-mail. Ele irá exibir algo parecido com estas informações:<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,141,50,$nome_conta,$preto);
imagestring($imagem,4,166,76,$email,$preto);
imagestring($imagem,4,166,196,$email_explode[0],$preto);
imagestring($imagem,3,145,233,'pop.'.$email_explode[1],$preto);
imagestring($imagem,3,129,270,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Estes dados estão incorretos, você precisa realizar algumas alterações. Uma delas é localizar o campo <b>Nome de usuário</b> e digitar o endereço da sua conta de e-mail, trocando o sinal de <b>@</b> pelo sinal de <b>=</b>. Por exemplo: <b><?php echo $email_explode[0].'='.$email_explode[1];?></b>
</p><p>No campo <b>Recebimento</b>, o endereço deste servidor deve ser <b>mbox.<?php echo end($email_explode);?></b>. Ao lado, iremos retirar a opção <b>POP</b> e marcar a opção <b>IMAP</b>.
</p><p>O protocolo <b>POP</b> e <b>IMAP</b> são diferentes, através do protocolo <b>POP</b> você irá realizar o download de todos as mensagens armazenados na <b>Caixa de Entrada</b> de sua conta de e-mail diretamente para o programa de e-mail. Já o <b>IMAP</b> faz apenas uma cópia de todas as mensagens de sua conta de e-mail. Recomendo a utilização do <b>IMAP</b>.
</p><p>Escolhendo a opção <b>IMAP</b>, o número ao lado deve ser alterado. Este número é o da porta utilizada, no caso do protocolo <b>IMAP</b> ela deve ser <b>143</b>. Deixe o campo ao lado do número da porta que está sendo utilizada como <b>Nenhuma</b>.
</p><p>No campo <b>Envio</b>, o endereço deste servidor deve ser <b>smtp.<?php echo end($email_explode);?></b>. O protocolo será o <b>SMTP</b> e a porta que deve ser utilizada é a <b>587</b>. O último campo também deve ser marcado a opção <b>Nenhuma</b>.
</p><p>Após alterar todas estas informações, clique em <b>Retestar configuração</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,141,50,$nome_conta,$preto);
imagestring($imagem,4,166,76,$email,$preto);
imagestring($imagem,4,166,196,str_replace('@','=',$email),$preto);
imagestring($imagem,3,145,233,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,3,130,270,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Ao clicar em <b>Retestar configuração</b> a opção <b>Criar conta</b> será habilitada. Clique sobre ela.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,141,50,$nome_conta,$preto);
imagestring($imagem,4,166,76,$email,$preto);
imagestring($imagem,4,153,187,str_replace('@','=',$email),$preto);
imagestring($imagem,3,138,219,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,3,125,248,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Na próxima tela será exibido um aviso por não usar criptografia nos servidores de entrada e saída (recebimento e envio), você não precisa se preocupar. Lembre-se apenas de marcar a opção <b>Entendo os riscos</b> e depois clicar novamente em <b>Criar conta</b>.<br /><br />
</p>
<?php
$j=10;
$imagem=imagecreatefrompng(PATH."Img$j.png");
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,4,410,112,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,4,343,160,'smtp.'.$email_explode[1],$preto);

imagepng($imagem,PATH.'image_temp'.$j.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$j$mail.png");

?>
<p>Após clicar em <b>Criar conta</b> você já pode notar a relação de pastas da sua conta de e-mail sendo listadas na lateral esquerda do programa de e-mail.<br /><br />
</p>

<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,29,12,$email,$preto);
imagestring($imagem,4,40,76,$email,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Mas seu programa de e-mail ainda não foi totalmente configurado, falta apenas mais um procedimento para que possamos finalizar. Para tal, ainda dentro do Thunderbird, você tem 3 (três) formas de seguir até ao próximo passo:
</p>
<ol><li> Clique com o botão direito sobre o seu endereço de e-mail que fica acima da pasta <b>Entrada</b>, e depois clique em <b>Configurar</b>.
    </li><li> Na parte superior do Thunderbird há o menu <b>Editar</b>. Vá até este menu e depois clique no item de menu <b>Configurar contas…</b>.
    </li><li> Clique sobre o seu endereço de e-mail que fica acima da pasta <b>Entrada</b> e depois clique na opção <b>Configurar esta conta</b> localizado na parte central do programa de e-mail.<br /><br />
    </li></ol>

<?php
IMG("http://wiki.hostnet.com.br/images/8/88/Tutorial-thunderbird-8.jpg");
?>

<p>Quando você prosseguir, será exibido a seguinte tela:<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,38,95,$email,$preto);
imagestring($imagem,4,380,85,$email,$preto);
imagestring($imagem,4,423,226,$email,$preto);
imagestring($imagem,4,423,193,$nome_conta,$preto);
imagestring($imagem,4,510,45,'<'.$email.'>',$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Nesta tela, você deve clicar na opção <b>Servidor de envio (SMTP)</b>, selecionar a conta que estamos configurando e depois clicar em <b>Editar</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,276,160,$email_explode[0].' - smtp.'.$email_explode[1].'(Padrao)',$preto);
imagestring($imagem,3,47,93,$email,$preto);

imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Na nova tela, localize o campo <b>Nome do usuário</b>, este campo deve ter o endereço do seu e-mail completo, alterando apenas o sinal de “<b>@</b>” pelo sinal de “<b>=</b>”, é o mesmo nome de usuário que utilizamos anteriormente na nossa configuração.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,113,100,'smtp.'.$email_explode[1],$preto);
imagestring($imagem,4,197,259,$email_explode[0],$preto);

imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Faça a alteração e clique no botão <b>OK</b>.<br /><br />
</p>
<?php
$imagem=imagecreatefrompng(PATH."Img$i.png");
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,4,113,100,'smtp.'.$email_explode[1],$preto);
imagestring($imagem,4,197,259,$email_explode[0].'='.$email_explode[1],$preto);

imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;

?>
<p>Pronto! Sua conta de e-mail da <b>Hostnet</b> foi configurada com sucesso no <b>Thunderbird</b>. Você já pode começar a enviar seus e-mails.
</p>