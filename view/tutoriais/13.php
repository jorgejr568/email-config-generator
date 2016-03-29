<p>Abra o <b>Mozilla Thunderbird</b> em "<b>Ferramentas</b>" >> "<b>Configurar contas...</b>".
</p><p>
    <?php image("http://wiki.hostnet.com.br/images/3/3b/Tutorial-thunderbird-1.png");?>
</p><p>Na próxima tela você deve clicar em "<b>Ações de contas</b>" e depois em "<b>Nova conta de e-mail...</b>":<br /><br />
</p><p>
    <?php image("http://wiki.hostnet.com.br/images/a/a9/Thunderbird_12_1.png");?>
</p><p>Nesta nova janela, você deve inserir os dados da sua conta de e-mail. Preencha os campos:<br /><br />
</p><p><b>Seu nome:</b> Seu nome<br />
    <b>Endereço de email:</b> <?php echo EMAIL_CLI;?> <br />
    <b>Senha:</b> Senha do seu e-mail <br /><br />
</p><p>Feito isto, clique em <b>Continuar</b>.<br /><br />
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img1.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 4,161,67, NOME_CONTA, $preto);
    imagestring($imagem, 2,161,92, EMAIL_CLI, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p><br />
    O Thunderbird tentará obter as informações da conta, porém para adiantar o processo clique em "<b>Config. manual</b>".
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img2.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 4,161,67, NOME_CONTA, $preto);
    imagestring($imagem, 2,161,92, EMAIL_CLI, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p><br />
    Aparecerá alguns campos para você preencher, veja os dados que deve inserir:
</p>
<ul><li><b>Recebimento IMAP:</b>  mbox.<?php echo DOMINIO_CLI;?> | <b>Porta:</b> 143 | <b>SSL:</b> Nenhuma
    </li></ul>
<ul><li><b>Envio SMTP:</b> smtp.<?php echo DOMINIO_CLI;?> | <b>Porta:</b> 587 | <b>SSL:</b> Nenhuma
    </li></ul>
<ul><li><b>Nome de usuário:</b> <?php echo USUARIO_CONTA;?>
    </li></ul>
<p><b>OBS</b> Caso tenha escolhido servidor POP3, no lugar de IMAP, será informado POP3, neste caso utilize a porta <b>110</b>. As demais informações são as mesmas.
</p><p><br />
    Após alterar estas informações, clique em <b>Retestar</b>. Estando tudo de acordo, o botão <b>Concluir</b> torna-se disponível. Clique nele.<br /><br />
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img3.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 4,161,67, NOME_CONTA, $preto);
    imagestring($imagem, 2,161,92, EMAIL_CLI, $preto);
    imagestring($imagem, 2,231,269, 'mbox.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 2,231,297, 'smtp.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 2,231,326, USUARIO_CONTA, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p><br />
    Caso os servidores de envio e recebimento não ofereçam autenticação segura, você verá uma janela como a que está abaixo. Isto significa que o Thunderbird está avisando-lhe de que os servidores POP/IMAP e SMTP não oferecem criptografia. Você não precisa se preocupar com isto, basta marcar a opção <b>Entendo os riscos</b> e depois clicar novamente em <b>Criar conta</b>.<br /><br />
</p><p><br />
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img4.png');
    $preto=imagecolorallocate($imagem, 255, 255, 255);

    imagestring($imagem, 3,357,127, 'mbox.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 3,310,176, 'smtp.'.DOMINIO_CLI, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
    imagedestroy($imagem);
    image(getBase64FromGeneration());
    ?></p><p><br />
    Feito isto, você já pode notar a relação de pastas da sua conta de e-mail sendo listadas na lateral esquerda do programa de e-mail. Agora basta usar o Thunderbird, clicando em <b>Receber</b>. Cada e-mail que você escrever, ficará guardado, de forma que quando você clicar em <b>Receber</b>, os e-mails que estão na fila serão repassados para o servidor de envio, e postados.<br /><br />
</p>