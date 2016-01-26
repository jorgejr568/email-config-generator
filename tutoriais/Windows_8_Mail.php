<p>Na tela inicial do sistema clique no aplicativo de <b>E-mail</b>.
</p><p><br />
    <?php IMG('http://wiki.hostnet.com.br/images/b/b4/1._E-mail.PNG');?>
</p><p><br />
    Depois clique em <b>Configurações</b>, onde nos dará mais opções para iniciar a configuração. (Caso não consiga visualizar a barra da direita, coloque o mouse no canto inferior direito da tela.)
</p><p><br />
    <?php IMG('http://wiki.hostnet.com.br/images/8/8d/2._Configura%C3%A7%C3%A3o.png');?>
</p><p><br />
    Após isso clique em <b>Contas</b>, do lado direito o primeiro item:
</p><p><br />
    <?php IMG('http://wiki.hostnet.com.br/images/9/98/3._Contas.PNG');?>
</p><p><br />
    Depois clique em <b>Adicionar uma conta</b>:
</p><p><br />
    <?php IMG('http://wiki.hostnet.com.br/images/e/e8/4._Adicionar_nova_conta.PNG');?>

</p><p><br />
    Clique na opção <b>Outra Conta</b>, já que vamos cadastrar uma conta de e-mail empresarial ou pessoal:
</p><p><br />
    <?php IMG('http://wiki.hostnet.com.br/images/1/10/5._Outra_Conta.PNG');?>

</p><p><br />
    Isso irá fazer com que abra uma nova tela, clique em <b>Mostrar mais detalhes</b>:
</p><p><br />
    <?php IMG('http://wiki.hostnet.com.br/images/6/60/6._Mostrar_mais_detalhes.PNG');?>
</p><p><br />
    Aparecerão três novos campos, <b>Nome de usuário, Servidor de email de entrada (IMAP), Servidor de email de saída (SMTP)</b>, preencha todos. Deixe marcada a opção <b>“Meu servidor de saída requer autenticação”</b>.
</p>
<ul><li> <b>E-mail</b>: <?php echo $email;?>
    </li><li> <b>Nome de Usuário</b>: <?php echo $email_explode[0].'='.$email_explode[1];?>
    </li><li> <b>Senha</b>: senha do seu e-mail
    </li><li> <b>Servidor de e-mail de entrada ( IMAP )</b>: mbox.<?php echo $email_explode[1];?>
    </li><li> <b>Servidor de e-mail de saída ( SMTP )</b>: smtp.<?php echo $email_explode[1];?>
    </li></ul>
<p><br />
    <?php
    $imagem=imagecreatefrompng(PATH.'Img1.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,2,157,108,$email,$preto);
    imagestring($imagem,2,157,154,str_replace('@','=',$email),$preto);
    imagestring($imagem,2,157,246,'mbox.'.$email_explode[1],$preto);
    imagestring($imagem,2,157,317,'smtp.'.$email_explode[1],$preto);
    imagepng($imagem,PATH.'image_temp'.$i.$mail.'.png');
    imagedestroy($imagem);
    IMG(PATH."image_temp$i$mail.png");
    $i++;
    ?>
</p><p><br />
    Pronto! Após clicar no botão <b>Conectar</b> aguarde a configuração ser finalizada, e sua conta já estará disponível para envio/recebimento de mensagens.
</p>