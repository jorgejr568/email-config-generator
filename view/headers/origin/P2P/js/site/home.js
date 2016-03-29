/**
 * Created by jorge on 23/03/16.
 */
$(document).ready(function () {
    $("[name=tutorialSelector]").select2({
    placeholder: "Selecione o tutorial",
    allowClear: true
        });
    $('.btn-generate').click(function () {
        $('.btn-generate').button('loading');
        $.post(origin.siteURL+"controller/gerar.tutorial",$('[name=formGenerateTutorial]').serialize(),function(data){
            $('#tutorialBox').removeClass('hidden').html(data);
            $('.btn-generate').button('reset');
        });
    });
    $(window).resize(function () {
        $('.select2-container').css({"width": $('.select2-container').parent().width()})
    });
    $('body').on('click','[name=util]', function () {
        var value=$('[name=util]:checked').val();
        if(value=='true' || value=='false'){
            if(value=='true') value=1;
            else value=0;
            $.post(origin.siteURL+"controller/utilidade.send",{"log": $('[name=log]').val(),"f": value}, function (data) {
                if(value==1) toPut=/** @lang HTML */ '<div class="alert alert-success"><span class="close" data-dismiss="alert">&times;</span> Obrigado pelo feedback.</div>';
                else {
                    toPut = '<div class="alert alert-danger"><span class="close" data-dismiss="alert">&times;</span> Em alguns segundos estaremos lhe enviando para o Helpdesk para que possa verificar o que ocorreu.</div>';
                    setTimeout(function(){
                        window.location.href="https://painel.hostnet.com.br/helpdesk";
                    },3000);
                }
                $('.utilidade-tutorial').html(toPut);

            });
        }
        else{
            sweetAlertError("Opção inválida");
        }
    })
});