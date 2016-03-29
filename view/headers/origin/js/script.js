$(document).ready(function(){
    $('.navbar-fixed-top').each(function () {
        $('body').addClass("has-fixed-bar");
        return true;
    });
    $('.tooltip-toggle').tooltip();
    $('.select2').select2({"language": "pt-BR"});
    $('a').not('.full-link').each(function () {
        $(this).attr('href',origin.siteURL+$(this).attr('href'));
    })
});
function sweetAlertError(e){
            sweetAlertInitialize();
            swal({title: "",
                text: e,
                html: true,
                confirmButtonClass: "btn-danger",
                type: 'error',
                confirmButtonText: 'Fechar'});
}