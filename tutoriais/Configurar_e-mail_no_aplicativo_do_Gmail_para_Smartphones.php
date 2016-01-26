<p>Primeiramente, abra seu aplicativo do <b>GMail</b>
    </p>
    <?php IMG(PATH.'img1.png');?>
    <p>Na próxima tela, aperte no menu.
    </p>
    <?php IMG(PATH.'img2.png');?>

    <p>Desça até encontrar a opção configurações.    </p>
    <?php IMG(PATH.'img3.png');?>
    <p>Na próxima tela, aperte em adicionar conta.
    </p>
    <?php IMG(PATH.'img4.png');?>

    <p>Na próxima tela selecione a opção "Pessoal (IMAP/POP)"</p>
    <?php IMG(PATH.'img5.png');?>

    <p>Na próxima tela será exibido para preencher o e-mail. Preencha com <?php echo $email;?> e logo após clique em "Configuração avançada".</p>
<?php
$imagem=imagecreatefrompng(PATH.'img6.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,283,$email,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>
    <p>Na próxima tela escolha o servidor de entrada de acordo com as suas necessidades e clique em "Próximo".
    </p>
    <ul><li> <b>IMAP</b>: Protocolo IMAP faz uma cópia de suas mensagens do servidor para seu dispositivo.
        </li><li><b>POP3</b>: Protocolo POP3 baixa e logo após remove todos as mensagens em seu servidor.
        </li></ul>
    <p>No exemplo abaixo optei por <b>IMAP</b>.</p>
   <?php
$imagem=imagecreatefrompng(PATH.'img7.png');
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,5,9,190,$email,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>

    <p>Digite sua senha e clique em próximo.</p>
<?php
$imagem=imagecreatefrompng(PATH.'img8.png');
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,5,9,190,$email,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>
<p>Preencha os dados de seu servidor de entrada conforme mostra abaixo:</p>
<ul>
<li>Nome de usuário: <b><?php echo str_replace('@','=',$email);?></b></li>
<li>Servidor: <b><?php echo 'mbox.'.$email_explode[1];?></b></li>
<li>Porta: <b>143</b></li>
<li>Tipo de segurança: <b>Nenhuma</b></li>
</ul>
<p>Após isso, clique em avançar</p>
<?php
$imagem=imagecreatefrompng(PATH.'img9.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,135,str_replace('@','=',$email),$preto);
imagestring($imagem,2,39,303,'mbox.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>

<p>Preencha os dados de seu servidor de saída conforme mostra abaixo:</p>
<ul>
<li>Servidor de saída: <b><?php echo 'smtp.'.$email_explode[1];?></b></li>
<li>Porta: <b>587</b></li>
<li>Exigir login: <b>Deixe marcado</b></li>
<li>Tipo de segurança: <b>Nenhuma</b></li>
<li>Nome de usuário: <b><?php echo str_replace('@','=',$email);?></b></li>
</ul>
<p>Após isso, clique em avançar</p>
<?php
$imagem=imagecreatefrompng(PATH.'img10.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,133,str_replace('@','=',$email),$preto);
imagestring($imagem,2,39,386,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>
<p>Esta próxima configuração é totalmente pessoal. Deixaremos a configuração padrão neste caso. Após personalizar as configurações de sua conta, clique em avançar.</p>
<?php IMG(PATH."img11.png");?>

<p>Preencha o nome para que identifique sua conta e o nome que será exibido em suas mensagens para que outras pessoas o identifiquem respectivamente.</p>

<?php
$imagem=imagecreatefrompng(PATH.'img12.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,313,ucfirst(current(explode('.',$email_explode[1]))),$preto);
imagestring($imagem,2,39,375,$nome_conta,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>

 <p>Pronto! Sua conta foi configurada com sucesso. </p>