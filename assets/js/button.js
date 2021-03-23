$(document).ready(function () {
    $('.btn-trocar').on('click', function () {
        $('.input-change-file').removeClass('hide')
        $('.input-change-file').prop('disabled', false);
        $('.img-livro-cadastrado').addClass('hide');
    });

    $('.btn-cancelar').on('click', function () {
        $('.input-change-file').prop('disabled', true);
        $('.img-livro-cadastrado').removeClass('hide');
        $('.input-change-file').addClass('hide');
    });
});