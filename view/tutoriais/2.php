    <p>Primeiramente, abra seu aplicativo do <b>GMail</b>
    </p>
    <? image(TUTORIAL_LINK_ORIGINAL_IMAGES.'img1.png');?>
    <p>Na próxima tela, aperte no menu.
    </p>
    <? image(TUTORIAL_LINK_ORIGINAL_IMAGES.'img2.png');?>

    <p>Desça até encontrar a opção configurações.    </p>
    <? image(TUTORIAL_LINK_ORIGINAL_IMAGES.'img3.png');?>
    <p>Na próxima tela, aperte em adicionar conta.
    </p>
    <? image(TUTORIAL_LINK_ORIGINAL_IMAGES.'img4.png');?>

    <p>Na próxima tela selecione a opção "Pessoal (IMAP/POP)"</p>
    <? image(TUTORIAL_LINK_ORIGINAL_IMAGES.'img5.png');?>

    <p>Na próxima tela será exibido para preencher o e-mail. Preencha com <?= EMAIL_CLI;?> e logo após clique em "Configuração avançada".</p>

    <?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'img6.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,283,EMAIL_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
    <p>Na próxima tela escolha o servidor de entrada de acordo com as suas necessidades e clique em "Próximo".
    </p>
    <ul><li> <b>IMAP</b>: Protocolo IMAP faz uma cópia de suas mensagens do servidor para seu dispositivo.
        </li><li><b>POP3</b>: Protocolo POP3 baixa e logo após remove todos as mensagens em seu servidor.
        </li></ul>
    <p>No exemplo abaixo optei por <b>IMAP</b>.</p>
   <?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'img7.png');
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,5,9,190,EMAIL_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>

    <p>Digite sua senha e clique em próximo.</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'img8.png');
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,5,9,190,EMAIL_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Preencha os dados de seu servidor de entrada conforme mostra abaixo:</p>
<ul>
<li>Nome de usuário: <b><?php echo USUARIO_CONTA;?></b></li>
<li>Servidor: <b><?php echo 'mbox.'.DOMINIO_CLI;?></b></li>
<li>Porta: <b>143</b></li>
<li>Tipo de segurança: <b>Nenhuma</b></li>
</ul>
<p>Após isso, clique em avançar</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'img9.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,135,USUARIO_CONTA,$preto);
imagestring($imagem,2,39,303,'mbox.'.DOMINIO_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>

<p>Preencha os dados de seu servidor de saída conforme mostra abaixo:</p>
<ul>
<li>Servidor de saída: <b><?php echo 'smtp.'.DOMINIO_CLI;?></b></li>
<li>Porta: <b>587</b></li>
<li>Exigir login: <b>Deixe marcado</b></li>
<li>Tipo de segurança: <b>Nenhuma</b></li>
<li>Nome de usuário: <b><?php echo USUARIO_CONTA;?></b></li>
</ul>
<p>Após isso, clique em avançar</p>
<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'img10.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,133,USUARIO_CONTA,$preto);
imagestring($imagem,2,39,386,'smtp.'.DOMINIO_CLI,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>
<p>Esta próxima configuração é totalmente pessoal. Deixaremos a configuração padrão neste caso. Após personalizar as configurações de sua conta, clique em avançar.</p>
<?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."img11.png");?>

<p>Preencha o nome para que identifique sua conta e o nome que será exibido em suas mensagens para que outras pessoas o identifiquem respectivamente.</p>

<?php
$imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'img12.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,39,313,CONTA_ID,$preto);
imagestring($imagem,2,39,375,NOME_CONTA,$preto);
imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());
?>

 <p>Pronto! Sua conta foi configurada com sucesso. </p>