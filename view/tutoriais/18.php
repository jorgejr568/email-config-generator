<p>Com esse tutorial você poderá utilizar sua conta de e-mail criada na Hostnet para receber e enviar através do Gmail .
</p><p>Primeiro acesse sua conta do Gmail <a rel="nofollow" target="_blank" class="external free" href="http://www.gmail.com">http://mail.google.com</a>
</p><p>No <b>canto superior direito</b> você deve clicar na <b>engrenagem</b> e depois na opção <b>CONFIGURAÇÕES</b>, conforme a imagem abaixo.
</p><p><br />
</p><p><?php image("http://wiki.hostnet.com.br/images/6/63/Gm1.png");?>
</p><p><br />
</p><p>Depois na aba <b>CONTAS E IMPORTAÇÃO</b> você clica em "<b>Adicionar uma conta de e-mail POP3 que você possui</b>" .
</p><p><br />
</p><p><?php image("http://wiki.hostnet.com.br/images/8/88/Gm6.png");?>
</p><p><br />
</p><p>Na próxima tela informe o nome do e-mail que deseja configurar.
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG1.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,148, 64,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
</p><p>Na próxima tela informe os dados de acordo com seu e-mail:
</p>
<ol><li> Nome de usuário: <b><?php echo USUARIO_CONTA;?></b>
    </li><li> Senha: senha do seu e-mail
    </li><li> Servidor POP: <b>mbox.<?php echo DOMINIO_CLI;?></b>
    </li><li> Porta: 110
    </li></ol>
<p>Marque as opções desejadas, recomendamos que marque essas:
</p>
<ul><li> Deixar uma cópia da mensagem recuperada no servidor. <font color="red"> <i>se você não marcar essa opção, os e-mails serão baixados ( POP3 ) para o Gmail e sumirão do servidor da Hostnet.</i></font>
    </li><li> Marcar as mensagens recebidas:
    </li></ul>
<p>Depois informe seu nome e seu endereço de e-mail.
</p><p>Depois clique em <b>ADICIONAR CONTA</b>.
</p><p><br />
</p><p> <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG2.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,3,247, 8,EMAIL_CLI,$preto);
    imagestring($imagem,3,143, 43,EMAIL_CLI,$preto);
    imagestring($imagem,4,143, 69,USUARIO_CONTA,$preto);
    imagestring($imagem,4,143, 128,'mbox.'.DOMINIO_CLI,$preto);
    imagestring($imagem,4,334, 205,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
</p><p>Depois escolha a opção "<b>Sim, desejo poder enviar e-mails como</b>" e clique em <b>PRÓXIMA ETAPA</b>.
</p><p><br />
</p><p><?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG3.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,3,312, 22,EMAIL_CLI.' ?',$preto);
    imagestring($imagem,3,269, 58,EMAIL_CLI.' .',$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
</p><p>Depois informe seu nome e seu endereço de e-mail.
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG4.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,171, 91,NOME_CONTA,$preto);
    imagestring($imagem,4,171, 120,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p><br />
</p><p>Na próxima tela informe:
</p>
<ol><li>Servidor SMTP: <b>smtp.<?php echo DOMINIO_CLI;?></b>
    </li><li> Porta: 587
    </li><li> Nome de usuário: <b><?php echo USUARIO_CONTA;?></b>
    </li><li> Senha:	senha do seu e-mail
    </li><li> Marque a opção: Conexão segura usando TLS (recomendado)
    </li></ol>
<p>Depois clique em <b>ADICIONAR CONTA</b> .
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG5.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,4,152, 82,'smtp.'.DOMINIO_CLI,$preto);
    imagestring($imagem,2,331, 43,DOMINIO_CLI,$preto);    
    imagestring($imagem,4,152, 108,USUARIO_CONTA,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
</p><p>Será exibido uma tela como essa abaixo, um código será enviado para o e-mail utilizado, basta pegar esse código e colar no campo informado.
</p><p><br />
</p><p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'IMG6.png');
    $preto=imagecolorallocate($imagem,0,0,0);
    imagestring($imagem,3,436, 103,EMAIL_CLI,$preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?>
</p><p><br />
</p><p>Pronto! Agora você pode enviar e receber e-mails utilizando sua conta por dentro do Gmail.
</p>