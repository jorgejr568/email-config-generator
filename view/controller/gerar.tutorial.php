<?php
if(!filter_var($_POST['emailField'],FILTER_VALIDATE_EMAIL)){
    bootstrapError("E-mail inválido");

}
elseif(empty($_POST['tutorialSelector'])){
    bootstrapError("Favor selecionar um tutorial");

}
else {
    require_once PATH . "model/class.tutorial.php";
    $tClass = new tutorial();
    if (!$tClass->tutorialExiste($_POST['tutorialSelector'])) {
        bootstrapError("Tutorial inexistente");
    }
    elseif(!$tClass->checkDomain(end(explode('@', $_POST['emailField'])))) {

        switch (end(explode('.', $_POST['emailField']))) {
            case 'br':
                $link = 'https://registro.br/cgi-bin/whois/?qr=' . end(explode('@', $_POST['emailField']));
                break;
            case 'rio':
                $link = 'http://whois.nic.rio/';
                break;
            default:
                $link = 'http://reports.internic.net/cgi/whois?whois_nic=' . end(explode('@', $_POST['emailField'])) . '&type=domain';
        }
        echo "<div class='col-md-12'>";
        bootstrapError('Ocorreu um erro de DNS. Prováveis motivos:<ol><li><a href="' . $link . '" target="_blank" class="full-link">Seu domínio não está registrado</a></li><li><a href="' . $link . '" target="_blank" class="full-link">Seu domínio está registrado, porém seus DNS não apontam para a Hostnet</a></li><li><a href="http://www.hostnet.com.br/wiki/index.php/DNS#Propaga.C3.A7.C3.A3o_de_DNS:" target="_blank" class="full-link">Houve uma alteração recente de DNS, e a propagação ainda não foi feita</a></li></ol>Para mais detalhes, entre em contato conosco via <a href="https://painel.hostnet.com.br/helpdesk" class="full-link">HelpDesk</a>.');
        echo "</div>";
    } else {
        $tClass->gerarTutorial(trim(strtolower($_POST['emailField'])), $_POST['tutorialSelector']);
        ?>
        <script>
            history.pushState('data', '', origin.siteURL + "?email=<?= $_POST['emailField'];?>&tutorial=<?= $_POST['tutorialSelector'];?>");
            $('html,body').animate({
                    scrollTop: $("#tutorialBox").offset().top
                },
                'slow');
        </script>
        <?
    }
}