<p>Abra seu <b>Outlook Express</b> e acesse a opção <b>Ferramentas</b> e depois clique em <b>Contas</b>.<br />
        <br />
    </p>
    <?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."C.jpg");?>
    <p><br /><br />
        Na próxima janela exibida clique em <b>Adicionar</b> e depois clique na opção  <b>E-mail</b> logo abaixo.<br />
        <br />
    </p>
        <?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."E.jpg");?>

    <p><br /><br />
        Agora escolha o servidor de entrada de acordo com as suas necessidades.<br />
        <b>IMAP</b>: Protocolo IMAP faz uma cópia de suas mensagens do servidor para seu Microsoft Outlook.<br />
        <b>POP3</b>: Protocolo POP3 baixa e logo após remove todas as mensagens em seu servidor.<br />
        Neste tutorial utilizamos o <b>IMAP</b>, mas todos os demais procedimentos são iguais independente do protocolo.<br />
        Na próxima janela preencha as seguintes informações:<br />
        No campo <b>Nome</b> digite o seu nome.<br />
        <br />
    </p>
    
            <?php
            $image=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'F.png');
            $preto=imagecolorallocate($image,0,0,0);
            imagestring($image,2,184,166,NOME_CONTA,$preto);

            imagepng($image,TUTORIAL_PATH_TO_GENERATE);
            imagedestroy($image);
            image(getBase64FromGeneration());

            ?>

        
    <p><br /><br />
        No campo <b>Endereço de e-mail</b> digite o seu e-mail.<br />
        <br />
    </p>
    
            <?php
            $image=imagecreatefromjpeg(TUTORIAL_PATH_ORIGINAL_IMAGES.'G.jpg');
            $preto=imagecolorallocate($image,0,0,0);
            imagestring($image,2,181,166,EMAIL_CLI,$preto);

            imagepng($image,TUTORIAL_PATH_TO_GENERATE);
            imagedestroy($image);
            image(getBase64FromGeneration());

            ?>
        
    <p><br /><br />
        No campo Meu servidor de entradas de e-mail é um servidor selecione <b>IMAP</b> ou <b>POP3</b> de acordo com a sua escolha anterior.<br />
        No campo <b>Servidor de entrada de emails(IMAP ou POP)</b> digite: <b>mbox.<?php echo DOMINIO_CLI;?></b><br />
        No campo <b>Servidor de saída de emails(SMTP)</b> digite: <b>smtp.<?php echo DOMINIO_CLI;?></b><br />
        <br />
    </p>
    
            <?php
            $image=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'imagesdd4H.png');
            $preto=imagecolorallocate($image,0,0,0);
            imagestring($image,2,50,182,'mbox.'.DOMINIO_CLI,$preto);
            imagestring($image,2,50,271,'smtp.'.DOMINIO_CLI,$preto);

            imagepng($image,TUTORIAL_PATH_TO_GENERATE);
            imagedestroy($image);
            image(getBase64FromGeneration());

            ?>

        
    <p><br /><br />
        No campo <b>Nome de Usuário</b> digite o seu e-mail substituindo o <b>@</b> pelo sinal <b>=</b>, ficando assim: <b><?php echo USUARIO_CONTA?></b><br />
        No campo <b>Senha</b> digite a senha de seu e-mail e marque a opção <b>Lembrar senha</b> caso não compartilhe o computador.<br />
        <br />
    </p>
    
            <?php
            $image=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'images33fI.png');
            $preto=imagecolorallocate($image,0,0,0);
            imagestring($image,2,186,138,USUARIO_CONTA,$preto);

            imagepng($image,TUTORIAL_PATH_TO_GENERATE);
            imagedestroy($image);
            image(getBase64FromGeneration());

            ?>
        
    <p><br /><br />
        Concluindo a configuração, é necessário informar que o servidor requer conexões autenticadas.<br />
        Clique no botão <b>Propriedades</b> quando a sua conta estiver selecionada.<br />
        Clique na guia <b>Servidores</b>.<br />
        Marque a opção <b>Meu servidor de saída(SMTP) requer autenticação</b>.
        <br />
    </p>
<?php

$image=imagecreatefrompng(TUTORIAL_PATH_ORIGINAL_IMAGES.'imagesddeM.png');
$preto=imagecolorallocate($image,0,0,0);
imagestring($image,2,155,119,'mbox.'.DOMINIO_CLI,$preto);
imagestring($image,2,155,145,'smtp.'.DOMINIO_CLI,$preto);
imagestring($image,2,155,198,USUARIO_CONTA,$preto);
imagepng($image,TUTORIAL_PATH_TO_GENERATE);
imagedestroy($image);
image(getBase64FromGeneration());

?>
    <p><br /><br />
    </p><p>Agora clique na aba <b>Avançado</b>, para alterar a porta dos servidores de entrada e saída.
    </p><p>Altere as portas para:<br />
        SMTP: <b>587</b><br />
        IMAP: <b>143</b>
    </p><p><b>OBS:</b> Caso tenha escolhido servidor POP3, no lugar de IMAP, será informado POP3, neste caso utilize a porta <b>110</b>.
    </p><p>Após realizar este procedimento clique em "<b>Ok</b>"
    </p><p><br />
    </p>
            <?php image(TUTORIAL_LINK_ORIGINAL_IMAGES."Outlook-587.jpg");?>

    <p><br />
        Logo após, clique em <b>Fechar</b> para finalizar as configurações de sua conta de e-mail.<br />
        Caso tenha escolhido o protocolo <b>IMAP</b>, para remover as mensagens excluídas (que aparecem riscadas) permanentemente, basta acessar a opção <b>Editar</b> e logo após <b>Limpar mensagens excluídas</b>.<br />
        Pronto! Seu Outlook Express está configurado para os servidores da Hostnet.<br />
        Envie um e-mail para suporte@hostnet.com.br com o assunto <b>Teste</b> para certificar que tudo funcionou corretamente.
    </p><p><br />
    </p>