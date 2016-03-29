<p>Para configurar uma nova conta de e-mail no Microsoft Outlook 2007 clique em "<b>Ferramentas</b>" >> "<b>Configurações de Conta</b>".<br /><br />
    </p>
        <?php image("http://hostnet.com.br/wiki/images/c/c9/Mo07-1.png")?>

    <p>Irá aparecer a janela de Definições de Conta.<br />
        Clique no botão "<b>Novo</b>". <br /><br />
    </p>
            <?php image("http://hostnet.com.br/wiki/images/1/11/Mo07-2.png")?>

    <p>Na próxima tela deverá <b>"Adicionar o Serviço de Correio Electrónico"</b>.<br />
        Selecione a opção que diz "<b>Microsoft Exchange, POP3, IMAP ou HTTP</b>".<br /><br />
    </p><p>Clique em "<b>Avançar</b>".
    </p>
                <?php image("http://hostnet.com.br/wiki/images/c/c8/Mo07-3.png")?>

    <p>Na próxima tela marque a opção de "<b>Configurar manualmente as definições do servidor ou tipos de servidor adicionais</b>".<br /><br />
    </p><p>Depois clique em "<b>Avançar</b>".<br /><br />
    </p>
                    <?php image("http://hostnet.com.br/wiki/images/2/20/Mo07-4.png")?>

    <p>Agora escolha o "Serviço de E-mail" marcando a opção "<b>Email da Internet</b>".<br /><br />
    </p><p>Depois clique em "<b>Avançar</b>".<br /><br />
    </p>
                        <?php image("http://hostnet.com.br/wiki/images/5/5c/Mo07-5.png")?>

    <p>Na próxima tela fará a configuração necessária para que a conta de e-mail funcione. <br /><br />
    </p><p><b>Informações do Usuário</b><br />
    </p>
    <ul><li> <b>Nome</b>: Seu nome
        </li><li> <b>Endereço de Email</b>: <?php echo EMAIL_CLI;?><br />
        </li></ul>
    <p><b>Informações do Servidor</b><br />
    </p>
    <ul><li> <b>Tipo de conta</b>:  Escolha a opção <b>IMAP</b> ou <b>POP3</b>. Recomendamos que escolha <b>IMAP</b> caso não tenha uma preferência.
        </li><li> <b>Servidor de entrada de emails</b>: Digite <b>mbox.<?php echo DOMINIO_CLI;?></b>
        </li><li> <b>Servidor de saída de emails (SMTP)</b>: Digite <b>smtp.<?php echo DOMINIO_CLI;?></b>.<br /><br />
        </li></ul>
    <p><b>Informações de Logon</b><br />
    </p>
    <ul><li> <b>Nome de usuário</b>: <b><?php echo USUARIO_CONTA;?></b>
        </li><li> <b>Senha</b>: Senha do seu e-mail.<br /><br />
        </li></ul>
    <p>Marque a opção "<b>Lembrar senha</b>", e clique em "<b>Mais configurações</b>".<br /><br />
    </p>
    <?php
    $imagem=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'Img1.png');
    $preto=imagecolorallocate($imagem, 0, 0, 0);
    imagestring($imagem, 2,209,141, NOME_CONTA, $preto);
    imagestring($imagem, 2,209,165, EMAIL_CLI, $preto);
    imagestring($imagem, 2,209,238, 'mbox.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 2,209,262, 'smtp.'.DOMINIO_CLI, $preto);
    imagestring($imagem, 2,209,311,USUARIO_CONTA, $preto);
    imagepng($imagem,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($imagem);
image(getBase64FromGeneration());

    ?> <br /><br />
    <p>Em "Mais configurações", clique na aba "<b>Servidor de Saída</b>".<br />
    </p><p>Marque a opção "<b>Meu servidor de saída (SMTP) requer autenticação</b>".<br /><br />
    </p>
                            <?php image("http://hostnet.com.br/wiki/images/2/21/Mo07-7.png")?>

    <p>Agora na aba "<b>Avançado</b>" verifique se as portas estão corretas:<br />
    </p>
    <ul><li> <b>Servidor de Entrada (IMAP):</b> 143
        </li><li> <b>Servidor de Saída (SMTP):</b> 587
        </li></ul>
    <p><b>OBS:</b> Caso tenha escolhido servidor POP3, no lugar de IMAP, será informado POP3, neste caso utilize a porta <b>110</b>.<br /><br />
    </p><p>Clique em "<b>Ok</b>" e depois em "<b>Avançar</b>".<br /><br />
    </p>
                                <?php image("http://hostnet.com.br/wiki/images/e/e9/Mo07-8.png")?>

    <p>Na tela final aparecerá uma mensagem de "Parabéns", então basta clicar em "<b>Concluir</b>".<br /><br />
    </p>
                                    <?php image("http://hostnet.com.br/wiki/images/8/88/Mo07-9.png")?>

    <p>Pronto seu <b>Outlook 2007</b> está configurado para os servidores da <b>Hostnet</b>.<br />
        Envie um e-mail para <b>suporte@hostnet.com.br</b> com o assunto "teste" para certificar que funcionou corretamente.
    </p>