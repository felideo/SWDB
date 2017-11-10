$(document).ready(function() {
	$('.voltar').on('click', function(){
        history.back();
    });

    $('#main-nave-mouseover, #main-nav').hover(function(){
        console.log('ok')
        $('#main-nav-toggle').trigger('click');
    });
});

String.prototype.replace_all = function(search, replacement){
    var target = this;
    return target.split(search).join(replacement);
}

function carregar_loader(tipo) {
    if (tipo == 'show') {
        swal({
            title: "Aguarde",
            allowEscapeKey: false,
            showConfirmButton: false,
            showCancelButton: false,
            imageUrl: '/public/images/ajax-loader-2.gif',
            animation: false
        });
    }

    if (tipo == 'hide') {
        swal.close();
    }
}




