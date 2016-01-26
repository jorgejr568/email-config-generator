<p>Abra seu <b>Microsoft Outlook</b> e acesse: <b>Ferramentas</b>>> <b>Contas de e-mail</b>. <br /><br />
    </p>
    <?php IMG("http://hostnet.com.br/wiki/images/8/86/Img1.jpg")?>
    <p>Na próxima tela, clique em <b>Adicionar uma nova conta de email</b> e logo após clique no botão <b>Avançar</b> logo abaixo.<br /><br />
    </p>
    <?php IMG("http://hostnet.com.br/wiki/images/f/f4/Img2.jpg")?>

    <p>Na próxima tela escolha o servidor de entrada de acordo com as suas necessidades.
    </p>
    <ul><li> <b>IMAP</b>: Protocolo IMAP faz uma cópia de suas mensagens do servidor para seu Microsoft Outlook.
        </li><li><b>POP3</b>: Protocolo POP3 baixa e logo após remove todos as mensagens em seu servidor.
        </li></ul>
    <p>No exemplo abaixo optei por <b>IMAP</b>.<br /><br />
    </p>
        <?php IMG("http://hostnet.com.br/wiki/images/b/bd/Img3.jpg")?>

    <p>Na próxima tela serão exibidos os seguintes campos.
    </p><p><b>Informações do Usuário</b>.
    </p>
    <ul><li> No campo <b>Nome</b> digite o seu nome.
        </li><li> No campo <b>Endereço de e-mail</b> digite o seu e-mail.<br /><br />
        </li></ul>
<?php
$imagem=imagecreatefrompng(PATH.'Img4.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,185,70,$nome_conta,$preto);
imagestring($imagem,3,185,110,$email,$preto);

imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>
<br /><br />
    <p><b>Informações do Servidor</b>.
    </p>
    <ul><li> No campo <b>Servidor de entrada de emails(IMAP ou POP)</b> digite <b>mbox.<?php echo $email_explode[1];?></b>
        </li><li> No campo <b>Servidor de saída de emails(SMTP)</b> digite <b>smtp.<?php echo $email_explode[1];?></b><br /><br />
        </li></ul>
<?php
$imagem=imagecreatefrompng(PATH.'Img5.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,246,55,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,3,246,85,'smtp.'.$email_explode[1],$preto);

imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>
<br /><br />
    <p><b>Informações de Logon</b>.
    </p>
    <ul><li> No campo <b>Nome de Usuário</b> : <b><?php echo str_replace('@','=',$email);?></b>
        </li><li> No campo <b>Senha</b> digite a senha de seu e-mail e marque a opção <b>Lembrar senha</b> caso não compartilhe o computador.<br /><br />
        </li></ul>
<?php
$imagem=imagecreatefrompng(PATH.'Img6.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,3,180,70,str_replace('@','=',$email),$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?> <br /><br />
    <p>Logo após, clique no botão <b>Mais Configurações</b><br /><br />
    </p>
<?php
$imagem=imagecreatefrompng(PATH.'Img7.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,151,169,$nome_conta,$preto);
imagestring($imagem,2,151,200,$email,$preto);
imagestring($imagem,2,151,282,str_replace('@','=',$email),$preto);
imagestring($imagem,2,545,169,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,2,545,200,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$j=$i;
$i++;
?>
<br /><br />
    <p>Será exibida uma tela de configuração, clique na guia <b>Servidor de saída</b>.<br /><br />
    </p>
<?php
$imagem=imagecreatefrompng(PATH.'Img8.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,41,129,'mbox.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>  <br /><br />
    <p>Marque a opção <b>Meu servidor de saída(SMTP) requer autenticação</b>, marque também a opção <b>Usar as mesmas config. do servidor de entrada de emails</b>.<br /><br />
    </p>
    <?php echo IMG("http://hostnet.com.br/wiki/images/d/da/Img6.jpg");?>
    <p>Agora clique na aba "Avançado" e informe as seguintes portas:<br />
    </p><p>E-mails de Entrada (IMAP): <b>143</b><br />
        E-mails de Saída (SMTP): <b>587</b><br /><br />
    </p><p><b>OBS:</b> Se utiliza a configuração POP3, deixe <b>desmarcada</b> a opção "Deixar uma cópia das mensagens no servidor" e a porta de Entrada deve ser <b>110</b>.<br /><br />
    </p>
        <?php echo IMG("http://hostnet.com.br/wiki/images/a/a1/Img6.1.png");?>

    <p>Clique em <b>Avançar</b> na tela de configuração da conta.<br /><br />
    </p>
<?php
$imagem=imagecreatefrompng(PATH.'Img9.png');
$preto=imagecolorallocate($imagem,0,0,0);
imagestring($imagem,2,123,138,$nome_conta,$preto);
imagestring($imagem,2,123,163,$email,$preto);
imagestring($imagem,2,123,231,str_replace('@','=',$email),$preto);
imagestring($imagem,2,448,138,'mbox.'.$email_explode[1],$preto);
imagestring($imagem,2,448,162,'smtp.'.$email_explode[1],$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?>    <p>Logo após, clique em <b>Concluir</b> para finalizar as configurações da sua conta de e-mail.<br /><br />
    </p>
            <?php echo IMG("http://hostnet.com.br/wiki/images/a/a9/Img8.jpg");?>

    <p>Caso tenha escolhido o protocolo <b>IMAP</b>, para remover as mensagens excluídas(riscadas) permanentemente, basta acessar a opção <b>Editar</b> e logo após <b>Limpar mensagens excluídas</b>. <br /><br />
    </p>
<?php
$imagem=imagecreatefrompng(PATH.'Img12.png');
$preto=imagecolorallocate($imagem,255,255,255);
imagestring($imagem,3,503,165,$nome_conta,$preto);
$len=503+strlen($nome_conta)*7;
imageline($imagem,503,172,$len,172,$preto);
imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
imagedestroy($imagem);
IMG(PATH."image_temp$i$mail.png");
$i++;
?> <br /><br />
    <p>Pronto seu <b>Microsoft Outlook</b> está configurado para os servidores da <b>Hostnet</b>.<br />
        Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto teste para certificar que funcionou corretamente.
    </p>